<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{

    public function generate($id) {
        $order = Order::with(['customer', 'product'])->findOrFail($id);
        $products = Product::all();
  
        $data = [
            'order_id' => $order->id,
            'customer_name' => $order->customer->name,
            'customer_email' => $order->customer->email,
            'customer_phone' => $order->customer->phone,
            'customer_address' => $order->customer->address,
            'product_cost' => $order->product->cost,
            'product_color' => $order->product->color,
            'quantity' => $order->quantity,
            'status' => $order->status == 1 ? 'Completed' : 'Pending',
            'total_payment' => $order->total_payment,
            'created_at' => $order->created_at->format('d/m/Y'),
            'invoice_date' => date('d/m/Y')
        ];

        $pdf = Pdf::loadView('generate-pdf', $data);

        return $pdf->download('invoice.pdf');
    }
}
