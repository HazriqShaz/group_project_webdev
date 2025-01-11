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

            <div class="specs-header mt-16">
                <h1>Compatibility</h1>
                <div class="specs-line"></div>
            </div>

            <div class="specs-image-container">
                <img id="image1" class="specs-image transition-opacity duration-500 opacity-100" src="https://i.postimg.cc/fk4tn8t3/pro2-gb.png" alt="">
                <img id="image2" class="specs-image transition-opacity duration-500 opacity-0" src="https://i.postimg.cc/QNFfDVKs/pro2-gray.png" alt="">
                <img id="image3" class="specs-image transition-opacity duration-500 opacity-0" src="https://i.postimg.cc/Hn8chqxD/pro2-black.png" alt="">
            </div>
        </section>

        <div class="specs-container-1">
            <div class="specs-icon">
                <img class=" w-14" src="{{ asset('images/switch.svg') }}" alt="">
            </div>
            <div class="specs-content">
                <h1>Switch</h1>
                <h2>3.0.0 and above (Switch)</h2>
                <h2>9.0.0 and above (Lite)</h2>
            </div>
        </div>
        <div class="specs-container-1">
            <div class="specs-icon">
                <img class=" w-14" src="{{ asset('images/windows.svg') }}" alt="">
            </div>
            <div class="specs-content">
                <h1>Windows</h1>
                <h2>Windows 10 and above</h2>
                <h2>Bluetooth® 4.0</h2>
            </div>
        </div>
        <div class="specs-container-1">
            <div class="specs-icon">
                <img class=" w-14" src="{{ asset('images/steam-deck.svg') }}" alt="">
            </div>
            <div class="specs-content">
                <h1>SteamOS</h1>
                <h2>SteamOS Holo 3.4</h2>
                <h2>and above</h2>
            </div>
        </div>
        <div class="specs-container-1">
            <div class="specs-icon">
                <img class=" w-14" src="{{ asset('images/android.svg') }}" alt="">
            </div>
            <div class="specs-content">
                <h1>Android</h1>
                <h2>9.0 and above</h2>
            </div>
        </div>
        <div class="specs-container-1">
            <div class="specs-icon">
                <img class=" w-14" src="{{ asset('images/apple.svg') }}" alt="">
            </div>
            <div class="specs-content">
                <h1>Apple</h1>
                <h2>iOS 16.3 and above</h2>
                <h2>macOS® 13.2 and above</h2>
            </div>
        </div>
        <div class="specs-container-1">
            <div class="specs-icon">
                <img class=" w-14" src="{{ asset('images/pi.svg') }}" alt="">
            </div>
            <div class="specs-content">
                <h1>Raspberry Pi</h1>
                <h2>Bluetooth® 2.0 and above</h2>
                <h2>2B, 2B+, 3B, Zero</h2>
            </div>
        </div>

        {{-- XL --}}
        <div class="specs-container-xl">
            <div class="specs-container-1 hidden xl:flex">
                <div class="specs-icon">
                    <img class=" w-14" src="{{ asset('images/switch.svg') }}" alt="">
                </div>
                <div class="specs-content ">
                    <h1>Switch</h1>
                    <h2>3.0.0 and above (Switch)</h2>
                    <h2>9.0.0 and above (Lite)</h2>                
                </div>
            </div>
            <div class="specs-container-1 hidden xl:flex">
                <div class="specs-icon">
                    <img class=" w-14" src="{{ asset('images/windows.svg') }}" alt="">
                </div>
                <div class="specs-content ">
                    <h1>Windows</h1>
                    <h2>Windows 10 and above</h2>
                    <h2>Bluetooth® 4.0</h2>
                </div>
            </div>
            <div class="specs-container-1 hidden xl:flex">
                <div class="specs-icon">
                    <img class=" w-14" src="{{ asset('images/steam-deck.svg') }}" alt="">
                </div>
                <div class="specs-content ">
                    <h1>SteamOS</h1>
                    <h2>SteamOS Holo 3.4</h2>
                    <h2>and above</h2>
                </div>
            </div>
        </div>
        <div class="specs-container-xl">
            <div class="specs-container-1 hidden xl:flex">
                <div class="specs-icon">
                    <img class=" w-14" src="{{ asset('images/android.svg') }}" alt="">
                </div>
                <div class="specs-content">
                    <h1>Android</h1>
                    <h2>9.0 and above</h2>
                </div>
            </div>
            <div class="specs-container-1 hidden xl:flex">
                <div class="specs-icon">
                    <img class=" w-14" src="{{ asset('images/apple.svg') }}" alt="">
                </div>
                <div class="specs-content ">
                    <h1>Apple</h1>
                    <h2>iOS 16.3 and above</h2>
                    <h2>macOS® 13.2 and above</h2>
                </div>
            </div>
            <div class="specs-container-1 hidden xl:flex">
                <div class="specs-icon">
                    <img class=" w-14" src="{{ asset('images/pi.svg') }}" alt="">
                </div>
                <div class="specs-content">
                    <h1>Raspberry Pi</h1>
                    <h2>Bluetooth® 2.0 and above</h2>
                    <h2>2B, 2B+, 3B, Zero</h2>
                </div>
            </div>
        </div>
        {{-- END XL --}}

        <div class="text-xs pl-8 pr-12 pb-8 pt-8 lg:px-10 font-normal xl:text-center">
            <p>* additional system support requires downloading and installing firmware available at support.8bitdo.com</p>
            <p>* switch compatibility does not support HD rumble or amiibo scanning</p>    
        </div>

        <div class="specs-header">
            <h1>Tech Specifications</h1>
            <div class="specs-line"></div>
        </div>

        <div class="specs-container-2">
            <h1>Special Features</h1>
            <ul class="list-disc specs-bullet">
                <li>Hall Effect joysticks</li>
                <li>2 Pro back paddle buttons</li>
                <li>Custom Profile switch button, 3 profiles, switch on the fly</li>
                <li>Mode switch button</li>
                <li>Ultimate Software on PC and mobile (android/ios)</li>
                <li>Enhanced grip</li>
                <li>Motion control (for Switch only)</li>
            </ul>
        </div>
        <div class="specs-container-2">
            <h1>Controller Mode</h1>
            <ul class="list-disc specs-bullet">
                <li>Switch mode</li>
                <li>X-Input</li>
                <li>D-Input</li>
            </ul>
        </div>
        <div class="specs-container-2">
            <h1>Dimension / Weight</h1>
            <ul class="list-disc specs-bullet">
                <li>153.6*100.6*64.5mm</li>
                <li>228g</li>
            </ul>
        </div>
        <div class="specs-container-2">
            <h1>Connectivity</h1>
            <ul class="list-disc specs-bullet">
                <li>Wireless Bluetooth®4.0</li>
                <li>USB-C</li>
            </ul>
        </div>
        <div class="specs-container-2">
            <h1>Battery Type / Battery Life</h1>
            <ul class="list-disc specs-bullet">
                <li>1000mAh Li-on battery, rechargeable</li>
                <li>20 play hours with 4 hour charging time</li>
            </ul>
        </div>
        <div class="specs-container-2 pb-8">
            <h1>Includes</h1>
            <ul class="list-disc specs-bullet">
                <li>8BitDo Pro 2 Bluetooth gamepad</li>
                <li>USB cable</li>
                <li>Instruction manual</li>
            </ul>
        </div>
    </body>
</html>
