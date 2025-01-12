<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pro2 8BitDo MY</title>
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-primary-1 box-border w-screen h-screen">
    <section class="dashboard-nav bg-red">
        {{-- navbar --}}
        <nav class=" nav-bar">
            <img class=" h-7 " src="{{ asset('images/Logo-white.svg') }}" alt="Logo">

            <div class="exit-icon">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="drop-down" >
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                            </svg>
                        </span>
                    </button>
                </form>
            </div>
        </nav>
        {{-- END navbar--}}

    </section>

    <section class="p-4 sm:p-8">
        <h1 class=" text-primary-text-1 font-semibold text-xl">Your Orders</h1>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
            <table class="w-full text-sm text-left rtl:text-right text-white border-[1px] sm:rounded-lg border-primary-text-2">
                <thead class="text-xs text-white uppercase bg-primary-1">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Phone
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Address
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Color / Variation
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Quantity
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Payment
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Created At
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" colspan="3" class="px-6 py-3 text-center">
                            Action
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr class="table-row">
                        <td class="px-6 py-4">
                            {{ $order->customer->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $order->customer->phone }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $order->customer->email }}
                        </td>
                        </td>
                        <td class="px-6 py-4">
                            {{ $order->customer->address }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $order->product->color }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $order->quantity }}
                        </td>
                        <td class="px-6 py-4">
                            RM {{ number_format($order->total_payment, 2) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $order->created_at->format('Y-m-d H:i:s') }}
                        </td>
                        <td class="px-6 py-4">
                            @if($order->status == '1')
                                <span class="text-green-500">Completed</span>
                            @else
                                <span class="text-yellow-500">Pending</span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('order.edit', $order->id) }}" class="font-medium text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>                                  
                            </a>
                        </td>
                        <td class="px-6 py-4">
                            <form action="{{ route('order.delete', $order->id) }}" method="post">
                                @csrf
                                @method('DELETE') <!-- This specifies the HTTP method should be DELETE -->

                                <button type="submit" class="font-medium text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('order.generate-pdf', $order->id) }}" class="font-medium text-orange-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                                </svg>                                  
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    @if(session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif
</body>
</html>