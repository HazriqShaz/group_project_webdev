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
<body class=" bg-primary-1 text-primary-text-1 box-border w-screen h-screen flex flex-col justify-center items-center">
    <img class=" h-7 mb-4" src="{{ asset('images/Logo-white.svg') }}" alt="Logo">
    
    <form class="" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="login">
                <div class="login-container">
                    <label for="name" class="label">Username</label>
                    <div class="mt-2 w-[18rem]">
                        <input type="text" name="name" id="name" class="input">
                    </div>    
                </div>

                <div class="login-container">
                    <label for="password" class="label">Password</label>
                    <div class="mt-2 w-[18rem]">
                        <input type="password" name="password" id="password" class="input">
                    </div>
                </div>
                
                <button type="submit" class=" mt-[12rem] rounded-md border-secondary-text-1 border-[1px] px-5 py-2 text-sm font-semibold text-secondary-text-1 shadow-sm">Login</button>
        </div>
    </form>
</body>
</html>