<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'color' => 'required',
            'quantity' => 'required',
            //Make an alert 
        ]);

        $customer = Customer::firstOrCreate(
            ['email' => $request->input('email')], // Check if the email already exists
            [
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
            ]
        );

        $color = $request->input('color');

        // Fetch the product with the selected color (assuming the 'color' column exists in the products table)
        $product = Product::where('color', $color)->first(); // Assuming 'color' is unique to the product

        if (!$product) {
            // Handle case where the product with the selected color does not exist
            return back()->withErrors(['color' => 'Product not found with the selected color.']);
        }

        $total_payment = $request->input('quantity') * $product->cost;

        $order = new Order();
        $order->customer_id = $customer->id;  // Associate the order with the customer
        $order->product_id = $product->id;    // Associate the order with the selected product    
        $order->quantity = $request->input('quantity');
        $order->total_payment = $total_payment;  // Store the calculated total_payment

        $order->save();

        return redirect()->route('order')->with('success', 'Your order has been placed successfully!');
    }

    public function showForm()
    {
        // Retrieve distinct colors from the products table
        $colors = Product::distinct()->pluck('color');  // Get unique colors from the products table

        return view('order', compact('colors'));  // Pass the colors to the view
    }

    public function showOrders() {
        $orders = Order::with(['customer', 'product'])->get();

        // Pass the orders data to the view
        return view('dashboard', compact('orders'));
    }

    public function edit($id)
    {
        // Fetch the order by ID, including related customer and product data
        $order = Order::with(['customer', 'product'])->findOrFail($id);

        // Get the list of products (for the color selection)
        $products = Product::all();

        // Pass the order and products to the edit view
        return view('edit', compact('order', 'products'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'nullable',
            'address' => 'nullable',
            'color' => 'nullable',
            'quantity' => 'nullable',
            'status' => 'nullable|in:1,0', // Only 1 or 0 are allowed for status
        ]);

        // Find the order to update
        $order = Order::findOrFail($id);

        // Check if the related customer and product exist
        if ($order->customer) {
            $order->customer->name = $request->input('name');
            $order->customer->email = $request->input('email');
            $order->customer->phone = $request->input('phone');
            $order->customer->address = $request->input('address');
            $order->customer->save();
        }

        if ($order->product) {
            $order->product->color = $request->input('color');
            $order->product->save();
        }

        $order->quantity = $request->input('quantity');
        $order->status = $request->input('status');

        $total_payment = $request->input('quantity') * $order->product->cost;
        $order->total_payment = $total_payment;

        $order->save();

        return redirect()->route('dashboard')->with('success', 'Order updated successfully!');
    }

    public function destroy($id)
    {
        // Find the order by ID
        $order = Order::findOrFail($id);

        // If you have foreign keys with cascading deletes, this might not be necessary
        $order->customer->delete();  // Delete the customer if it's related and needs to be deleted
        
        // Delete the order
        $order->delete();

        // Redirect back with success message
        return redirect()->route('dashboard')->with('success', 'Order deleted successfully!');
    }

}
