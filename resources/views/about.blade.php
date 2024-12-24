<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pro2 8BitDo MY</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class=" bg-primary-1 text-primary-text-1 box-border">
        <section class="section bg-black">
            <img class=" h-[100%] object-cover relative opacity-40" src='https://i.postimg.cc/Njk4DHS8/wall1.jpg' border='0' alt='wall1'/>
            
            {{-- navbar --}}
            <nav class=" nav-bar">
                <img class=" h-7" src="{{ asset('images/Logo-white.svg') }}" alt="Logo">

                <div class="nav-links">
                    <a href="" class="nav-links-item">About</a>
                    <a href="" class="nav-links-item">Tech Specs</a>
                    <a href="" class="nav-links-item">Order Here</a>
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
                <a class="drop-down-item" href="#">About</a>
                <a class="drop-down-item" href="#">Tech Specs</a>
                <a class="drop-down-item" href="#">Order Here</a>

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
                <a href="#" class="order-btn lg:hidden">ORDER NOW</a>
                <h2 class="hidden lg:inline text-xl drop-shadow-2xl italic">"A modern controller that respects the classics."</h2>
                <p class="hidden lg:inline text-sm drop-shadow-2xl">Pro2 controllers isn't any old Bluetooth® game controller - it was designed with respect for the classics. We paid extra attention to the most critical characteristics like the D-PAD, to make sure it feels exactly like you remember it.</p>
            </section>    
        </section>
        <section class="sub-section parallex hidden lg:flex">
            <a href="#" class="order-btn lg:hidden">ORDER NOW</a>
            <h2 class="hidden lg:inline text-xl drop-shadow-2xl italic">"A modern controller that respects the classics."</h2>
            <p class="hidden lg:inline text-sm drop-shadow-2xl">Pro2 controllers isn't any old Bluetooth® game controller - it was designed with respect for the classics. We paid extra attention to the most critical characteristics like the D-PAD, to make sure it feels exactly like you remember it.</p>
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
                <section class="sub-section">
                    <footer class="footer">
                        <img class=" h-5" src="{{ asset('images/Logo-white.svg') }}" alt="Logo">
                        <a href="https://www.8bitdo.com/pro2/" class=" pt-2">More info at 8bitdo.com</a>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                        </span>
                    </footer>
                </section>
            </section>
        {{-- END Hidden when lg --}}
        
        <section class="section hidden lg:flex bg-red-500"></section>
    </body>
</html>
