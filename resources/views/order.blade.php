<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pro2 8BitDo MY</title>
        <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/x-icon">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class=" bg-primary-1 text-primary-text-1 box-border">
        <section class="section">
            {{-- navbar --}}
            <nav class=" nav-bar">
                <img class=" h-7" src="{{ asset('images/Logo-white.svg') }}" alt="Logo">

                <div class="nav-links">
                    <a href="{{ route('home') }}" class="nav-links-item">About</a>
                    <a href="{{ route('specs') }}" class="nav-links-item">Tech Specs</a>
                    <a href="{{ route('order') }}" class="nav-links-item">Place Order</a>
                </div>

                <div class="drop-down-icon">
                    <button type="button" class="drop-down" >
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                            </svg>                              
                        </span>
                    </button>
                </div>
            </nav>
            {{-- dropdown menu  --}}
            <div class="drop-down-menu hidden">
                <div class="drop-down-item"></div>  {{-- spacer class  --}}
                <a class="drop-down-item" href="{{ route('home') }}">About</a>
                <a class="drop-down-item" href="{{ route('specs') }}">Tech Specs</a>
                <a class="drop-down-item" href="{{ route('order') }}">Place Order</a>

            </div>
            {{-- END dropdown menu  --}}
            {{-- END navbar--}}

            <img class="h-full object-cover mt-16" src="https://i.postimg.cc/PqfMRqng/wall2.jpg" alt="">

        </section>
        <div class="order-content">
            <h2>8BitDo Pro 2 Bluetooth Controller</h2>
            <h1>RM 160.00</h1>
        </div>

        <div class="order-content border-t-[1px] border-primary-text-2">
            <h3>Order Form</h3>

            <form action="{{ route('submit') }}" method="POST">
                @csrf

                <label for="name" class="label">Name</label>
                <div class="mt-2 w-[18rem]">
                    <input type="text" name="name" id="name" class="input">
                </div>

                <label for="email" class="label">Email</label>
                <div class="mt-2 w-[18rem]">
                    <input type="email" name="email" id="email" class="input">
                </div>

                <label for="phone" class="label">Phone Number</label>
                <div class="mt-2 w-[18rem]">
                    <input type="tel" name="phone" id="phone" class="input">
                </div>

                <label for="address" class="label">Full Address</label>
                <div class="mt-2 w-[18rem]">
                    <input type="text" name="address" id="address" class="input">
                </div>

                <label for="color" class="label">Color</label>
                <div class="mt-2 w-[8rem]">
                    <select name="color" id="color" class="input">
                        @foreach($colors as $color)
                            <option value="{{ $color }}">{{ ucfirst($color) }}</option>
                        @endforeach
                    </select>
                </div>

                <label for="quantity" class="label">Quantity</label>
                <div class="mt-2 w-16">
                    <input type="number" name="quantity" id="quantity" class="input" value="1">
                </div>

                <div class=" mt-14 mb-8 w-16">
                    <button type="submit" class="rounded-md border-secondary-text-1 border-[1px] px-5 py-2 text-sm font-semibold text-secondary-text-1 shadow-sm">Submit</button>
                </div>

            </form>
        </div>
        
        @if(session('success'))
            <script>
                alert("{{ session('success') }}");
            </script>
        @endif
    </body>
</html>
