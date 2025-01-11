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
        <section class="section bg-black">
            <img class=" h-[100%] object-cover relative opacity-40" src='https://i.postimg.cc/Njk4DHS8/wall1.jpg' border='0' alt='wall1'/>
            
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

            <div class=" text-image-container ">
                <h2 class="text-base sm:text-xl lg:text-2xl font-bold">8BitDo Pro 2 Bluetooth Gamepad</h2>
                <p class="hidden lg:inline text-base">Play like a Pro with 8BitDo’s most advanced retro controller, now upgraded with Hall Effect joysticks. Compatible with Switch, Windows, Apple, Android, and more.</p>
            </div>
        </section>
        <section class="section lg:hidden">
            <section class="sub-section">
                <section class="section-content">
                    <p>Play like a Pro with 8BitDo’s most advanced retro controller, now upgraded with Hall Effect joysticks. Compatible with Switch, Windows, Apple, Android, and more.</p>
                    <div class="line-spacing"></div>    
                </section>
            </section>
            <section class="sub-section parallex">
                <a href="{{ route('order') }}" class="order-btn lg:hidden">ORDER NOW</a>
                <h2 class="hidden lg:inline text-xl drop-shadow-2xl italic">"A modern controller that respects the classics."</h2>
                <p class="hidden lg:inline text-sm drop-shadow-2xl">Pro2 controllers isn't any old Bluetooth® game controller - it was designed with respect for the classics. We paid extra attention to the most critical characteristics like the D-PAD, to make sure it feels exactly like you remember it.</p>
            </section>    
        </section>
        <section class="sub-section parallex hidden lg:flex">
            <a href="{{ route('order') }}" class="order-btn lg:hidden">ORDER NOW</a>
            <h2 class="hidden lg:inline text-xl drop-shadow-2xl italic xl:mr-5 font-bold">"A modern controller that respects the classics."</h2>
            
            <div class="parallex-content">
                <p class="hidden lg:inline text-sm drop-shadow-2xl xl:text-lg">Pro2 controllers isn't any old Bluetooth® game controller - it was designed with respect for the classics. We paid extra attention to the most critical characteristics like the D-PAD, to make sure it feels exactly like you remember it.</p>
                <a href="{{ route('order') }}" class="parallex-content-btn">ORDER NOW</a>
            </div>
        </section>
        {{-- ^Dont ask about this.... --}}

        {{-- Hidden when lg --}}
            <section class="section lg:hidden">
                <section class="sub-section">
                    <div class="img-container img-container-left">
                        <img class="sub-section-img" src="https://i.postimg.cc/V6V04fzW/mapping.png" alt="mapping">
                    </div>
                    <div class="sub-section-content">
                        <h1>Mapping</h1>
                        <p>Assign the buttons with the functionality to your liking</p>    
                    </div>
                </section>

                <section class="sub-section">
                    <div class="sub-section-content text-right">
                        <h1>Sticks</h1>
                        <p>Customize each stick for a higher precision control</p>    
                    </div>
                    <div class="img-container">
                        <img class="sub-section-img" src="https://i.postimg.cc/Vs2Dk1Xt/sticks.png" alt="sticks">
                    </div>
                </section>
            </section>

            <section class="section lg:hidden">
                <section class="sub-section">
                    <div class="img-container img-container-left">
                        <img class="sub-section-img" src="https://i.postimg.cc/5NvpHGmR/triggers.png" alt="triggers">
                    </div>
                    <div class="sub-section-content">
                        <h1>Triggers</h1>
                        <p>Adjust the ranges of your triggers to act faster</p>    
                    </div>
                </section>
                <section class="sub-section">
                    <div class="sub-section-content text-right">
                        <h1>Vibration</h1>
                        <p>Modify the vibration intensity for better gameplay comfort</p>    
                    </div>
                    <div class="img-container">
                        <img class="sub-section-img" src="https://i.postimg.cc/Hkgzb2Zs/vibration.png" alt="vibration">
                    </div>
                </section>
            </section>

            <section class="section lg:hidden">
                <section class="sub-section">
                    <div class="img-container img-container-left">
                        <img class="sub-section-img" src="https://i.postimg.cc/fbMdRqHm/macros.png" alt="macros">
                    </div>
                    <div class="sub-section-content">
                        <h1>Macros</h1>
                        <p>Assign a long sequence and action to one single button</p>    
                    </div>
                </section>
            </section>
        {{-- END Hidden when lg --}}
        
        <section class="section hidden lg:flex px-24 py-8">
            <div class="card-section">
                <div class="card">
                    <div class="card-image-container">
                        <img class="sub-section-img" src="https://i.postimg.cc/V6V04fzW/mapping.png" alt="mapping">
                    </div>
                    <div class="card-content">
                        <h1>Mapping</h1>
                        <p>Assign the buttons with the functionality to your liking</p>    
                    </div>
                </div>
                <div class="card">
                    <div class="card-image-container">
                        <img class="sub-section-img" src="https://i.postimg.cc/Vs2Dk1Xt/sticks.png" alt="mapping">
                    </div>
                    <div class="card-content">
                        <h1>Sticks</h1>
                        <p>Customize each stick for a higher precision control</p>    
                    </div>
                </div>
                <div class="card">
                    <div class="card-image-container">
                        <img class="sub-section-img" src="https://i.postimg.cc/5NvpHGmR/triggers.png" alt="mapping">
                    </div>
                    <div class="card-content">
                        <h1>Triggers</h1>
                        <p>Adjust the ranges of your triggers to act faster</p>    
                    </div>
                </div>
                <div class="card hidden xl:flex">
                    <div class="card-image-container">
                        <img class="sub-section-img" src="https://i.postimg.cc/Hkgzb2Zs/vibration.png" alt="mapping">
                    </div>
                    <div class="card-content">
                        <h1>Vibration</h1>
                        <p>Modify the vibration intensity for better gameplay comfort</p>    
                    </div>
                </div>
                <div class="card hidden xl:flex">
                    <div class="card-image-container">
                        <img class="sub-section-img" src="https://i.postimg.cc/fbMdRqHm/macros.png" alt="mapping">
                    </div>
                    <div class="card-content">
                        <h1>Macros</h1>
                        <p>Assign a long sequence and action to one single button</p>    
                    </div>
                </div>

            </div>
        </section>
        <section class="section hidden lg:flex px-24 py-8 xl:hidden">
            <div class="card-section">
                <div class="card">
                    <div class="card-image-container">
                        <img class="sub-section-img" src="https://i.postimg.cc/Hkgzb2Zs/vibration.png" alt="mapping">
                    </div>
                    <div class="card-content">
                        <h1>Vibration</h1>
                        <p>Modify the vibration intensity for better gameplay comfort</p>    
                    </div>
                </div>
                <div class="card">
                    <div class="card-image-container">
                        <img class="sub-section-img" src="https://i.postimg.cc/fbMdRqHm/macros.png" alt="mapping">
                    </div>
                    <div class="card-content">
                        <h1>Macros</h1>
                        <p>Assign a long sequence and action to one single button</p>    
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>
