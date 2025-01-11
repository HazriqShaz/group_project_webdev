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
            <img class=" h-7" src="{{ asset('images/Logo-white.svg') }}" alt="Logo">

            <div class="exit-icon">
                <button type="button" class="drop-down" >
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                          </svg>
                    </span>
                </button>
            </div>
        </nav>
        {{-- END navbar--}}

    </section>

    <section class="p-4 sm:p-8">
        <h1 class=" text-primary-text-1 font-semibold text-lg">Your Orders</h1>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
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
                            Color/Variation
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
                            Action
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="table-row">
                        <th scope="row" class="table-th">
                            
                        </th>
                        <td class="px-6 py-4">
                            
                        </td>
                        <td class="px-6 py-4">
                            
                        </td>
                        <td class="px-6 py-4">
                            
                        </td>
                        <th scope="row" class="table-th">
                            
                        </th>
                        <th scope="row" class="table-th">
                            
                        </th>
                        <th scope="row" class="table-th">
                            
                        </th>
                        <th scope="row" class="table-th">
                            
                        </th>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>