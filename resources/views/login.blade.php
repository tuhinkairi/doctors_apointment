<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | MediHub.com</title>
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/animation.css')}}">
</head>

<body class="w-screen h-screen overflow-hidden">
    <div class="log_screen absolute top-0 change_bg bg-center -z-10 h-full w-full bg-cover "></div>
    <section class="w-full h-full flex items-center justify-center">
        <div class="bg-[rgba(0,0,0,.5)] p-5 sm:p-10 w-fit rounded-md space-y-3" >
            <div class="flex items-center justify-center" href="home.html">
                <img class="h-8 w-8 mr-2" src="{{asset('images/logo.png')}}" alt="logo">
                <h1 class="font-bold text-white text-xl">MediHub.com</h1>
            </div>
            <div class="flex justify-between items-center">

                <h1 class="_login text-3xl text-white first-letter:text-[rgb(255,124,48)] w-fit font-bold border-b-4 pr-2 border-b-[rgb(255,124,48)] hidden">Log In</h1>
                
                <h1 class="_signup text-3xl text-white first-letter:text-[rgb(255,124,48)] w-fit font-bold border-b-4 pr-2 border-b-[rgb(255,124,48)]">Sign Up</h1>
                
            </div>
        <form action="{{url('/')}}/register" method="post" class="_signup w-80 sm:w-96">
        @csrf  
            <label class="block capitalize text-lg font-bold text-white" for="name">name</label>
            <input type="text" id="name" name="register_name" class="p-1 w-full mb-2 focus:outline outline-[rgb(255,124,48)] outline-4 rounded-md " value="{{old('register_name')}}" placeholder="name" required >
            <span class="errorshow" style="color:white;">
                @error('register_name')
                {{$message}}
                @enderror
            </span>
            <label class="block capitalize text-lg font-bold text-white" for="email">email</label>
            <input type="email" id="email" name="register_email" class="p-1 w-full mb-2 focus:outline outline-[rgb(255,124,48)] outline-4 rounded-md" value="{{old('register_email')}}" placeholder="email" >
            <span class="errorshow" style="color:white;">
                @error('register_email')
                {{$message}}
                @enderror
            </span>
            <label class="block capitalize text-lg font-bold text-white" for="new_password">Password</label>
            <input type="password" id="new_password" name="register_password" class="p-1 w-full mb-2 focus:outline outline-[rgb(255,124,48)] outline-4 rounded-md" autocomplete="on" placeholder="Password" required value="{{old('register_password')}}">
            <span class="errorshow" style="color:white;">
                @error('register_password')
                {{$message}}
                @enderror
            </span>
            <label class="block capitalize text-lg font-bold text-white" for="correct_pass">Confirm Password</label>
            <input type="password" name="confirm_password" id="correct_pass" class="p-1 w-full mb-2 focus:outline outline-[rgb(255,124,48)] outline-4 rounded-md " autocomplete="on" placeholder="Confirm Password" required value="{{old('confirm_password')}}">
            <span class="errorshow" style="color:white;">
                @error('confirm_password')
                {{$message}}
                @enderror
            </span>
            <input  type="submit" id="signup_submit" class="w-full py-2 px-3 mt-2 rounded-md shadow-md transition delay-100 ease-in-out bg-[rgb(255,124,48)] text-white hover:bg-white hover:text-gray-800 font-semibold text-sm cursor-pointer" value="Sign Up">
        </form>

        <form action="/login" method="post" class="_login w-80 sm:w-96 hidden">
            @csrf
            <label class="block capitalize text-lg font-bold text-white" for="email_login">email</label>
            <input type="email" id="email_login" name="login_email" class="p-1 w-full mb-2 focus:outline outline-[rgb(255,124,48)] outline-4 rounded-md " placeholder="email" required>
            <span class="errorshow" style="color:white;">
                @error('login_email')
                {{$message}}
                @enderror
            </span>

            <label class="block capitalize text-lg font-bold text-white" for="password">Password</label>
            <input type="password" id="password" name="login_password" class="p-1 w-full mb-2 focus:outline outline-[rgb(255,124,48)] outline-4 rounded-md" autocomplete="on" placeholder="Password" required>
            <span class="errorshow" style="color:white;">
                @error('login_password')
                {{$message}}
                @enderror
            </span>
            <input  type="submit" class="w-full py-2 px-3 mt-2 rounded-md shadow-md transition delay-100 ease-in-out bg-[rgb(255,124,48)] text-white hover:bg-white hover:text-gray-800 font-semibold text-sm cursor-pointer" value="Login">
        </form>

        <h1 id="login_btn" class="hidden text-white cursor-pointer w-fit ml-auto text-sm font-semibold hover:underline">Creat a new account.</h1>
        <h1 id="signup_btn" class=" text-white cursor-pointer w-fit ml-auto text-sm font-semibold hover:underline">Already have a account?</h1>
        </div>
    </section>
    <script 
    src="js/login_controler.js"></script>
    <script 
     src="{{ asset('js/validation.js')}}"></script>
</body>

</html>