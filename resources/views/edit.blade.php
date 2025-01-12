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
<body class="bg-primary-1 text-primary-text-1 box-border w-screen h-screen">
    <section class="dashboard-nav bg-red">
        {{-- navbar --}}
        <nav class=" nav-bar">
            <img class=" h-7 " src="{{ asset('images/Logo-white.svg') }}" alt="Logo">

            <div class="exit-icon">
                <button type="button" class="drop-down" >
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                        </svg>
                    </span>
                </button>
            </div>
        </nav>
        {{-- END navbar--}}

    </section>
    <form class="{{ route('order.update', $order->id) }}" action="" method="post">
        @csrf
        @method('PUT') <!-- Use PUT for update -->

        <div class="edit">
            <a href="{{ route('dashboard') }}">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>        
                </span>
            </a>
            
              <label for="name" class="label">Name</label>
            <div class="mt-2 w-[18rem]">
                <input type="text" name="name" id="name" class="input" value="{{ $order->customer->name }}">
            </div>

            <label for="email" class="label">Email</label>
            <div class="mt-2 w-[18rem]">
                <input type="email" name="email" id="email" class="input" value="{{ $order->customer->email }}">
            </div>

            <label for="phone" class="label">Phone Number</label>
            <div class="mt-2 w-[18rem]">
                <input type="tel" name="phone" id="phone" class="input" value="{{ $order->customer->phone }}">
            </div>

            <label for="address" class="label">Full Address</label>
            <div class="mt-2 w-[18rem]">
                <input type="text" name="address" id="address" class="input" value="{{ $order->customer->address }}">
            </div>

            <label for="color" class="label">Color</label>
            <div class="mt-2 w-[8rem]">
                <select name="color" id="color" class="input">
                    <option value="Gray" {{ $order->product->color == 'Gray' ? 'selected' : '' }}>Gray</option>
                    <option value="Black" {{ $order->product->color == 'Black' ? 'selected' : '' }}>Black</option>
                    <option value="Gameboy" {{ $order->product->color == 'Gameboy' ? 'selected' : '' }}>Gameboy</option>
                </select>                
            </div>

            <label for="quantity" class="label">Quantity</label>
            <div class="mt-2 w-16">
                <input type="number" name="quantity" id="quantity" class="input" value="{{ $order->quantity }}">
            </div>

            <label for="status" class="label">Status</label>
            <div class="mt-2 w-[8rem]">
                <select name="status" id="status" class="input">
                    <option value="1" {{ $order->status == '1' ? 'selected' : '' }}>Completed</option>
                    <option value="0" {{ $order->status == '0' ? 'selected' : '' }}>Pending</option>
                </select>
            </div>
            
            <button type="submit" class=" mt-12 rounded-md border-secondary-text-1 border-[1px] px-5 py-2 text-sm font-semibold text-secondary-text-1 shadow-sm">Submit</button>

    </div>
    </form>
    <div class="w-screen h-4"></div>
</body>
</html>