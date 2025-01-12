<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INVOICE</title>
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/x-icon">
</head>
<body style="padding: 1rem;">
    <div style="max-width: 56rem; margin: 0 auto; background-color: white; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 0.375rem; padding: 1rem;">
        <!-- Invoice Header -->
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div style="text-align: left;">
                <img src="{{ asset('images/Logo-white.svg') }}" alt="Logo" style="height: 1.25rem; margin-bottom: 0.5rem;">
                <h1 style="font-size: 1.5rem; font-weight: bold; color: #4A4A4A;">Invoice</h1>
                <h1 style="font-size: 1rem; color: #6B7280;">#{{ $order_id }}</h1>
            </div>
            <div style="text-align: right;">
                <p style="color: #4A4A4A; font-size: 0.875rem; font-weight: 600;">8BitDo</p>
                <p style="color: #6B7280; font-size: 0.75rem;">123 Business St, Batu Pahat</p>
                <p style="color: #6B7280; font-size: 0.75rem;">Johor, Malaysia</p>
                <p style="color: #6B7280; font-size: 0.75rem;">Phone: (123) 456-7890</p>
                <p style="color: #6B7280; font-size: 0.75rem;">Email: shop@8bitdo.com</p>
            </div>
        </div>

        <div style="margin: 1rem 0; border-top: 1px solid #E5E7EB;"></div>

        <!-- Customer Details -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
            <div>
                <h2 style="font-size: 0.875rem; font-weight: 600; color: #4A4A4A;">Bill To</h2>
                <p style="color: #6B7280; font-size: 0.75rem;">{{ $customer_name }}</p>
                <p style="color: #6B7280; font-size: 0.75rem;">{{ $customer_address }}</p>
                <p style="color: #6B7280; font-size: 0.75rem;">Phone: {{ $customer_phone }}</p>
                <p style="color: #6B7280; font-size: 0.75rem;">Email: {{ $customer_email }}</p>
            </div>
            <div style="text-align: right;">
                <h2 style="font-size: 0.875rem; font-weight: 600; color: #4A4A4A;">Invoice Date</h2>
                <p style="color: #6B7280; font-size: 0.75rem;">{{ $invoice_date }}</p>
                <h2 style="font-size: 0.875rem; font-weight: 600; color: #4A4A4A; margin-top: 1rem;">Due Date</h2>
                <p style="color: #6B7280; font-size: 0.75rem;">{{ $invoice_date }}</p>
            </div>
        </div>

        <div style="margin: 1rem 0; border-top: 1px solid #E5E7EB;"></div>

        <!-- Invoice Items -->
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background-color: #F3F4F6; text-align: left;">
                    <th style="padding: 0.25rem; font-size: 0.75rem; font-weight: 600; color: #6B7280;">Description</th>
                    <th style="padding: 0.25rem; font-size: 0.75rem; font-weight: 600; color: #6B7280;">Color / Variation</th>
                    <th style="padding: 0.25rem; font-size: 0.75rem; font-weight: 600; color: #6B7280;">Unit Price</th>
                    <th style="padding: 0.25rem; font-size: 0.75rem; font-weight: 600; color: #6B7280;">Quantity</th>
                    <th style="padding: 0.25rem; font-size: 0.75rem; font-weight: 600; color: #6B7280;">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding: 0.25rem; font-size: 0.75rem; color: #4B5563;">8BitDo Pro 2 Bluetooth Controller</td>
                    <td style="padding: 0.25rem; font-size: 0.75rem; color: #4B5563;">{{ $product_color }}</td>
                    <td style="padding: 0.25rem; font-size: 0.75rem; color: #4B5563;">RM {{ $product_cost }}</td>
                    <td style="padding: 0.25rem; font-size: 0.75rem; color: #4B5563;">{{ $quantity }}</td>
                    <td style="padding: 0.25rem; font-size: 0.75rem; color: #4B5563;">RM {{ $total_payment }}</td>
                </tr>
            </tbody>
        </table>

        <div style="margin: 1rem 0; border-top: 1px solid #E5E7EB;"></div>

        <!-- Invoice Summary -->
        <div style="display: flex; justify-content: flex-end;">
            <div style="width: 33%;">
                <table style="width: 100%;">
                    <tbody>
                        <tr style="font-weight: bold; color: #4A4A4A;">
                            <td style="padding: 0.25rem; font-size: 0.75rem; text-align: right;">Total</td>
                            <td style="padding: 0.25rem; font-size: 0.75rem;">RM {{ $total_payment }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div style="margin: 1rem 0; border-top: 1px solid #E5E7EB;"></div>

        <!-- Footer -->
        <div style="text-align: center; color: #6B7280; font-size: 0.75rem;">
            <p>Bank Account Number</p>
            <p>757449561</p>
        </div>
    </div>
</body>
</html>