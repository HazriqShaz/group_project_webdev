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
}
