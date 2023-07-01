<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | MediHub.com</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body class="max-w-screen overflow-x-hidden">
    <header class="absolute top-2 min-w-full px-2 z-50">
        <!-- nav bar -->
        <nav class="px-4 py-2 flex bg-[rgb(48,122,96)] rounded-full items-center justify-between shadow-md">
            <div class="w-1/2">
                <!-- logo -->
                <a class="flex items-center" href="index.php">
                    <img class="h-8 w-8 mr-2" src="{{ asset('images/logo.png')}}" alt="logo">
                    <h1 class="font-bold text-white">MediHub.com</h1>
                </a>
            </div>
            <!-- large navigation bar -->
            <ul class="hidden md:flex w-full justify-end items-center">
                <li><a class="px-4 py-1 mx-[.5px] text-center font-bold text-white hover:underline underline-offset-4"
                        href="/">Home</a></li>
                    <div id="dropdown_button"  class="cursor-pointer relative  text-center font-bold text-white hover:underline underline-offset-4" 
                    ><span class="w-full px-4 py-1 mx-[.5px]" onclick="dropdown()">Explore</span>
                    <ul id="dropdown_items" class=" hidden absolute bg-[rgb(48,122,96)] pt-3 -right-4 w-auto capitalize shadow-lg transition delay-75 ease-in-out">

                        <li class="w-full hover:bg-white hover:shadow-md p-2 px-4 hover:text-[rgb(48,122,96)]">apintment</li>
                        <li class="w-full hover:bg-white hover:shadow-md p-2 px-4 hover:text-[rgb(48,122,96)]">apintment</li>
                        <li class="w-full hover:bg-white hover:shadow-md p-2 px-4 hover:text-[rgb(48,122,96)]">apintment</li>
                        <li class="w-full hover:bg-white hover:shadow-md p-2 px-4 hover:text-[rgb(48,122,96)]">apintment</li>
                    </ul>
                </div>
                <li><a class="px-4 py-1 mx-[.5px] text-center font-bold text-white hover:underline underline-offset-4"
                        href="#about">About</a></li>
                <li><a class="px-4 py-1 mx-[.5px] text-center font-bold text-white hover:underline underline-offset-4"
                        href="#contact">Contact</a></li>
                <li><a href="/register" class="transition delay-100 ease-in-out mr-6 py-1 px-3 rounded-md shadow-md bg-[rgb(255,124,48)] text-gray-100 hover:bg-white hover:text-gray-800 font-semibold text-sm ">Creat
                        New</a></li>
            </ul>
            <!-- small nav bar -->
            <button id="menu_btn" class="md:hidden grid justify-end mr-6 my-1 list-none cursor-pointer" onclick="cross()">
                <li id="one_line" class="py-[2px] px-4 my-[2px] bg-white rounded-full transition delay-0 ease-in-out" ></li>
                <li id="two_line" class="py-[2px] px-4 my-[2px] bg-white rounded-full transition delay-200 ease-in-out" ></li>
                <li id="three_line" class="py-[2px] px-4 my-[2px] bg-white rounded-full transition delay-200 ease-in-out" ></li>
            </button>

        </nav>
        <nav id="mini_nav" class=" transition delay-250 ease-in-out translate-x-[100vw]">
            <ul class=" p-5 w-full bg-[rgba(0,0,0,0.5)] rounded-md">

                <li><a class="block capitalize p-2 text-center hover:bg-white hover:text-[rgb(48,122,96)] rounded-md font-bold text-md text-white" href="/">Home</a></li>
                <li><a class="block capitalize p-2 text-center hover:bg-white hover:text-[rgb(48,122,96)] rounded-md font-bold text-md text-white" href="/apointment">apointment</a></li>
                <li><a class="block capitalize p-2 text-center hover:bg-white hover:text-[rgb(48,122,96)] rounded-md font-bold text-md text-white" href="#services">services</a></li>
            <li><a class="block capitalize p-2 text-center hover:bg-white hover:text-[rgb(48,122,96)] rounded-md font-bold text-md text-white" href="#doctor">doctors</a></li>
            <li><a class="block capitalize p-2 text-center hover:bg-white hover:text-[rgb(48,122,96)] rounded-md font-bold text-md text-white" href="#about">about</a></li>
            <li><a class="block capitalize p-2 text-center hover:bg-white hover:text-[rgb(48,122,96)] rounded-md font-bold text-md text-white" href="#contact">contact</a></li>
            <li><a class="block capitalize p-2 text-center hover:bg-white hover:text-[rgb(48,122,96)] rounded-md font-bold text-md text-white" href="/register">Create New</a></li>
        </ul>
        </nav>
    </header>
    <main>
        <section
            class="_banner bg-[url('/static/images/background.jpg')] bg-cover h-[450px] md:h-[65vw] bg-right lg:h-[45vw]" >
            <div class="absolute top-0 w-full h-[450px] z-0 backdrop-blur-[5px] sm:hidden "></div>
            
            <div class="text-center sm:text-left sm:w-2/3 lg:w-1/2 px-6 sm:pl-4 md:pl-12 lg:pl-16 relative top-[35%]">
                <h1 class="font-bold text-3xl md:text-4xl text-gray-800">Lorem ipsum dolor sit amet consectetur.</h1>
                <h2 class="font-bold sm:text-md  text-rose-600 my-2">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Quas odio aliquid saepe laboriosam nam a?</h2>
                <button
                    class="transition delay-100 ease-in-out py-2 px-3 rounded-md shadow-md bg-[rgb(255,124,48)] text-gray-100 hover:bg-white hover:text-gray-800 font-semibold text-sm ">Creat
                    New</button>
            </div>
        </section>
        <!-- services -->
        <section>
            <!-- heading services -->
            <div class="p-10 ">
                    <h1 class="capitalize text-gray-800 font-bold text-4xl pb-2 w-fit border-b-4 border-[rgba(48,122,96,0.99)]">Spacial Services</h1>
                    <p class="font-semibold text-gray-700 capitalize my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate ullam quo maiores iste atque modi earum dolorem porro nobis at, provident, autem pariatur eaque placeat libero debitis reiciendis laborum voluptatum fugiat distinctio dolore quidem rerum beatae. Est autem ab illum tempore veritatis ex iure voluptas nisi impedit, a odio eum.</p>
                    <button class="transition delay-100 ease-in-out py-2 px-6 rounded-md shadow-md bg-[rgb(255,124,48)] text-gray-100 hover:bg-[rgba(48,122,96,0.99)]  font-semibold text-sm capitalize w-fit float-right ">view all</button>
            </div>
            <!-- feature cards -->
            <section class="_feature-cards py-4 flex flex-wrap justify-center items-start clear-both text-center">
                    <div class="mx-4 px-4 py-4 max-w-[300px] hover:shadow-md" ><a class=" " href="#">

                        <img src="{{ asset('icons/health.png')}}" class="invert-[100%] my-3 p-3 rounded-full w-fit m-auto bg-red-600" alt="health">
                        <h1 class="capitalize font-bold text-2xl text-[rgba(48,122,96,0.99)]">healt care</h1>
                        <p class="font-semibold text-gray-700 capitalize my-3 text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque accusamus cupiditate repellat ad eius molestias laudantium! Omnis non perferendis pariatur expedita veniam vero excepturi eaque totam ipsum. Corrupti, deserunt minus!</p>
                    </a></div>

                    <div class="mx-4 px-4 py-4 max-w-[300px] hover:shadow-md" ><a class=" " href="#">
                        <img src="{{ asset('icons/help.png')}}" class="invert-[100%] my-3 p-3 rounded-full w-fit m-auto bg-red-600" alt="help">
                        <h1 class="capitalize font-bold text-2xl text-[rgba(48,122,96,0.99)]">healt care</h1>
                        <p class="font-semibold text-gray-700 capitalize my-3 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis dolores, vel minus voluptatem expedita similique ullam velit est voluptate magnam qui voluptas neque nam animi alias! Repellendus iste ea debitis?</p>
                    </a></div>

                    <div class="mx-4 px-4 py-4 max-w-[300px] hover:shadow-md" ><a class=" " href="#">
                        <img src="{{ asset('icons/lab.png')}}" class="invert-[100%] my-3 p-3 rounded-full w-fit m-auto bg-red-600" alt="lab">
                        <h1 class="capitalize font-bold text-2xl text-[rgba(48,122,96,0.99)]">healt care</h1>
                        <p class="font-semibold text-gray-700 capitalize my-3 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque vel esse laborum facilis assumenda rem ad tempora exercitationem accusamus dignissimos corrupti a nisi eligendi, ratione, in obcaecati nobis? Fugit, repellat!</p>
                    </a></div>

            </section>
        </section>
        <!-- why we -->
        <section class="_whywe ">
            <div class=" bg-[rgb(48,122,96)] py-5 px-10">
            <h1 class="text-3xl sm:text-4xl font-bold text-white border-spacing-3 border-b-4 border-[rgb(255,124,48)] w-fit m-auto shadow-sm">Why we ?</h1>
            <ul class="px-5 sm:w-2/3 m-auto py-3">
                <li class="flex items-center py-2">
                    <img src="{{ asset('icons/png6.png')}}" class="w-fit shadow-xl p-1 h-[40px] bg-white rounded-full"  alt="icons">
                    <h1 class="text-white text-md font-semibold first-letter:text-[rgb(255,124,48)] first-letter:text-xl first-letter:font-extrabold pl-5  ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste optio ducimus commodi fugit excepturi cum nam vel exercitationem at nemo?</h1>                                
                </li>
                <li class="flex items-center py-2">
                    <img src="{{ asset('icons/lab.png') }}" class="w-fit shadow-xl p-1 h-[40px] bg-white rounded-full"  alt="icons">
                    <h1 class="text-white text-md font-semibold first-letter:text-[rgb(255,124,48)] first-letter:text-xl first-letter:font-extrabold pl-5  ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste optio ducimus commodi fugit excepturi cum nam vel exercitationem at nemo?</h1>                            
                </li>
                <li class="flex items-center py-2">
                    <img src="{{ asset('icons/png3.png')}}" class="w-fit shadow-xl p-1 h-[40px] bg-white rounded-full"  alt="icons">
                    <h1 class="text-white text-md font-semibold first-letter:text-[rgb(255,124,48)] first-letter:text-xl first-letter:font-extrabold pl-5  ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste optio ducimus commodi fugit excepturi cum nam vel exercitationem at nemo?</h1>                            
                </li>
                <li class="flex items-center py-2">
                    <img src="{{ asset('icons/png2.png')}}" class="w-fit shadow-xl p-1 h-[40px] bg-white rounded-full"  alt="icons">
                    <h1 class="text-white text-md font-semibold first-letter:text-[rgb(255,124,48)] first-letter:text-xl first-letter:font-extrabold pl-5  ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste optio ducimus commodi fugit excepturi cum nam vel exercitationem at nemo?</h1>                            
                </li>
            </ul>

            </div>
        </section>
     <!-- viewing  -->
        <section class="_card_section py-10 lg:py-20 lg:px-10">
            <div class="_cards_long hidden md:grid grid-cols-4 m-6">
                    <div class="_card-1 shadow-md shadow-gray-800 h-72 relative z-[10] translate-x-20 -translate-y-10 w-auto bg-[url('/static/images/gal1.jpg')] bg-cover border-[rgb(255,124,48)] bg-center border-4 rounded-md flex items-end  ">
                        <h1 class="font-bold text-xl bg-[rgb(48,122,96)] text-white p-1 m-3 border-l-[rgb(255,124,48)] border-l-4">Best Labs</h1>
                        
                    </div>
                    <div class="_card-1 shadow-md shadow-gray-800 h-72 translate-x-10 translate-y-10 z-[5]  w-auto bg-[url('/static/images/gal2.jpg')] bg-cover border-[rgb(48,122,96)] bg-center border-4 rounded-md flex items-end ">
                        <h1 class="font-bold text-xl bg-[rgb(48,122,96)] text-white p-1 m-3 border-l-[rgb(255,124,48)] border-l-4">Professional Stuffs</h1>
                    </div>

                    <div class="_card-1 shadow-md shadow-gray-800 h-72 w-auto relative  -translate-x-5 -translate-y-10 bg-[url('/static/images/gal3.jpg')] bg-cover border-[rgb(255,124,48)] bg-center border-4 rounded-md flex items-start ">
                    <h1 class="font-bold text-xl bg-[rgb(48,122,96)] text-white p-1 m-3 border-l-[rgb(255,124,48)] border-l-4">Best Doctors</h1>
                </div>
                <div class="_card-1 shadow-md shadow-gray-800 h-72 w-auto -translate-x-10 translate-y-10 bg-[url('/static/images/gal6.jpg')] bg-cover border-[rgb(48,122,96)] bg-center border-4 rounded-md flex items-end ">
                    <h1 class="font-bold text-xl bg-[rgb(48,122,96)] text-white p-1 m-3 border-l-[rgb(255,124,48)] border-l-4">Best Consultants</h1>
                </div>
            </div>
            <div class="_cards grid grid-rows-2 md:hidden m-6">
                <section class="grid grid-cols-2 items-center justify-center">
                    
                    <div class="_card-2 shadow-md shadow-gray-800 h-72 m-2 relative z-[10] w-auto bg-[url('/static/images/gal1.jpg')] bg-cover border-[rgb(255,124,48)] bg-center border-4 rounded-md flex items-end  ">
                        <h1 class="font-bold text-xl bg-[rgb(48,122,96)] text-white p-1 m-3 ml-2 sm:ml-3 border-l-[rgb(255,124,48)] border-l-4">Best Labs</h1>
                        
                    </div>
                    <div class="_card-2 shadow-md shadow-gray-800 h-72 z-[5] m-2 w-auto bg-[url('/static/images/gal2.jpg')] bg-cover border-[rgb(48,122,96)] bg-center border-4 rounded-md flex items-end ">
                        <h1 class="font-bold text-xl bg-[rgb(48,122,96)] text-white p-1 m-3 ml-2 sm:ml-3 border-l-[rgb(255,124,48)] border-l-4">Professional Stuffs</h1>
                    </div>
                </section>
                <section class="grid grid-cols-2 items-center justify-center" >
                    <div class="_card-2 shadow-md shadow-gray-800 h-72 m-2 w-auto relative  bg-[url('/static/images/gal3.jpg')] bg-cover border-[rgb(255,124,48)] bg-center border-4 rounded-md flex items-end ">
                        <h1 class="font-bold text-xl bg-[rgb(48,122,96)] text-white p-1 m-3 ml-2 sm:ml-3 border-l-[rgb(255,124,48)] border-l-4">Best Doctors</h1>
                    </div>
                    <div class="_card-2 shadow-md shadow-gray-800 h-72 m-2 w-auto bg-[url('/static/images/gal6.jpg')] bg-cover border-[rgb(48,122,96)] bg-center border-4 rounded-md flex items-end ">
                        <h1 class="font-bold text-xl bg-[rgb(48,122,96)] text-white p-1 m-3 ml-2 sm:ml-3 border-l-[rgb(255,124,48)] border-l-4">Best Consultants</h1>
                    </div>
                </section>
            </div>
        </section>


        <!-- about end -->
        <section class="_about grid sm:grid-cols-2  items-center bg-[rgba(48,122,96,0.99)]">
            <section class="my-5 px-10">
                <h1 class="text-3xl sm:text-4xl font-bold text-white border-spacing-3 border-b-4 border-[rgb(255,124,48)] w-fit shadow-sm">About
                    Us</h1>
                <p class="text-white  font-semibold text-sm my-3">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Facere ducimus, ut corporis minima quidem, error distinctio animi unde obcaecati sit alias
                    vero optio tempora perspiciatis eos consequatur, voluptatum in mollitia.</p>
                <button
                    class="transition delay-100 ease-in-out py-2 px-3 rounded-md shadow-md bg-[rgb(255,124,48)] text-gray-100 hover:bg-white hover:text-gray-800 font-semibold text-sm">
                    Read More
                </button>

            </section>
            <section class="_image px-3 py-3 lg:px-10 lg:py-10">
                <img class="shadow-md" src="{{ asset('images/chiness.jpg')}}" alt="image">
            </section>
        </section>
        <!-- about end -->

        <!-- populer -->
        <section class="_docslider relative h-96 flex flex-col items-start justify-center w-auto">
            <button id="lbtn" class="h-16 w-16 rounded-full absolute left-0  z-10  flex items-center justify-center hover:bg-[rgba(0,0,0,.3)] transition ease-out delay-75 "><img class="rotate-180" src="{{ asset('icons/right.png')}}" alt="left_btn"></button>
            <button id="rbtn" class="h-16 w-16 rounded-full absolute right-0 z-10   flex items-center justify-center hover:bg-[rgba(0,0,0,.3)] transition ease-out delay-75 "><img src="{{ asset('icons/right.png')}}" alt="right_btn"></button>
            <div>
                <h1 class="mx-10 my-5 m-auto capitalize text-gray-800 font-bold text-4xl pb-2 w-fit border-b-4 border-[rgba(48,122,96,0.99)]">Top Doctors</h1>
            </div>
            
    
                    
            <ul id="doc_slider" class="flex items-center justify-start py-5 sm:px-5 md:px-10  sm:space-x-5 transition ease-in-out delay-75">
                <li class="card_slider cursor-pointer w-[100vw] flex justify-center sm:flex-none sm:w-fit" >
                    <!-- todo js script needed for animation -->
                    <div class="relative w-80 sm:w-72 h-56 flex items-end justify-start bg-[url('/static/images/pexels-gustavo-fring-4173239.jpg')] bg-cover bg-center bg-no-repeat shadow-md border-gray-400 border hover:scale-110 transition delay-75 ease-in-out">
                        
                        <h1 class="font-bold left-0 text-md absolute bg-[rgb(48,122,96)] text-white p-1 m-3 border-l-[rgb(255,124,48)] border-l-4">Dr. Lorem, ipsum.</h1>

                        <div class="bg-[rgba(24,18,18,0.6)] w-full p-2 h-full opacity-0  hover:opacity-75 transition ease-in-out delay-100  ">
                            <h1 class="font-bold text-lg underline text-white">Dr. Lorem, ipsum.</h1>
                            <p class="text-sm font-semibold text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, harum. Vero, tempora ducimus eius temporibus obcaecati iure labore qui omnis accusamus doloremque magnam eveniet cumque exercitationem dolores aut, quis error.</p>
                        </div>
                    </div>
                </li>
                
                <li class="card_slider cursor-pointer w-[100vw] flex justify-center sm:flex-none sm:w-fit" >
                    <!-- todo js script needed for animation -->
                    <div class="relative w-80 sm:w-72 h-56 flex items-end justify-start bg-[url('/static/images/pexels-gustavo-fring-4173239.jpg')] bg-cover bg-center bg-no-repeat shadow-md border-gray-400 border hover:scale-110 transition delay-75 ease-in-out">
                        
                        <h1 class="font-bold left-0 text-md absolute bg-[rgb(48,122,96)] text-white p-1 m-3 border-l-[rgb(255,124,48)] border-l-4">Dr. Lorem, ipsum.</h1>

                        <div class="bg-[rgba(24,18,18,0.6)] w-full p-2 h-full opacity-0  hover:opacity-75 transition ease-in-out delay-100  ">
                            <h1 class="font-bold text-lg underline text-white">Dr. Lorem, ipsum.</h1>
                            <p class="text-sm font-semibold text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, harum. Vero, tempora ducimus eius temporibus obcaecati iure labore qui omnis accusamus doloremque magnam eveniet cumque exercitationem dolores aut, quis error.</p>
                        </div>
                    </div>
                </li>
                
                <li class="card_slider cursor-pointer w-[100vw] flex justify-center sm:flex-none sm:w-fit" >
                    <!-- todo js script needed for animation -->
                    <div class="relative w-80 sm:w-72 h-56 flex items-end justify-start bg-[url('/static/images/pexels-gustavo-fring-4173239.jpg')] bg-cover bg-center bg-no-repeat shadow-md border-gray-400 border hover:scale-110 transition delay-75 ease-in-out">
                        
                        <h1 class="font-bold left-0 text-md absolute bg-[rgb(48,122,96)] text-white p-1 m-3 border-l-[rgb(255,124,48)] border-l-4">Dr. Lorem, ipsum.</h1>

                        <div class="bg-[rgba(24,18,18,0.6)] w-full p-2 h-full opacity-0  hover:opacity-75 transition ease-in-out delay-100  ">
                            <h1 class="font-bold text-lg underline text-white">Dr. Lorem, ipsum.</h1>
                            <p class="text-sm font-semibold text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, harum. Vero, tempora ducimus eius temporibus obcaecati iure labore qui omnis accusamus doloremque magnam eveniet cumque exercitationem dolores aut, quis error.</p>
                        </div>
                    </div>
                </li>
                
                <li class="card_slider cursor-pointer w-[100vw] flex justify-center sm:flex-none sm:w-fit" >
                    <!-- todo js script needed for animation -->
                    <div class="relative w-80 sm:w-72 h-56 flex items-end justify-start bg-[url('/static/images/pexels-gustavo-fring-4173239.jpg')] bg-cover bg-center bg-no-repeat shadow-md border-gray-400 border hover:scale-110 transition delay-75 ease-in-out">
                        
                        <h1 class="font-bold left-0 text-md absolute bg-[rgb(48,122,96)] text-white p-1 m-3 border-l-[rgb(255,124,48)] border-l-4">Dr. Lorem, ipsum.</h1>

                        <div class="bg-[rgba(24,18,18,0.6)] w-full p-2 h-full opacity-0  hover:opacity-75 transition ease-in-out delay-100  ">
                            <h1 class="font-bold text-lg underline text-white">Dr. Lorem, ipsum.</h1>
                            <p class="text-sm font-semibold text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, harum. Vero, tempora ducimus eius temporibus obcaecati iure labore qui omnis accusamus doloremque magnam eveniet cumque exercitationem dolores aut, quis error.</p>
                        </div>
                    </div>
                </li>
                
                <li class="card_slider cursor-pointer w-[100vw] flex justify-center sm:flex-none sm:w-fit" >
                    <!-- todo js script needed for animation -->
                    <div class="relative w-80 sm:w-72 h-56 flex items-end justify-start bg-[url('/static/images/pexels-gustavo-fring-4173239.jpg')] bg-cover bg-center bg-no-repeat shadow-md border-gray-400 border hover:scale-110 transition delay-75 ease-in-out">
                        
                        <h1 class="font-bold left-0 text-md absolute bg-[rgb(48,122,96)] text-white p-1 m-3 border-l-[rgb(255,124,48)] border-l-4">Dr. Lorem, ipsum.</h1>

                        <div class="bg-[rgba(24,18,18,0.6)] w-full p-2 h-full opacity-0  hover:opacity-75 transition ease-in-out delay-100  ">
                            <h1 class="font-bold text-lg underline text-white">Dr. Lorem, ipsum.</h1>
                            <p class="text-sm font-semibold text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, harum. Vero, tempora ducimus eius temporibus obcaecati iure labore qui omnis accusamus doloremque magnam eveniet cumque exercitationem dolores aut, quis error.</p>
                        </div>
                    </div>
                </li>
                
                <li class="card_slider cursor-pointer w-[100vw] flex justify-center sm:flex-none sm:w-fit" >
                    <!-- todo js script needed for animation -->
                    <div class="relative w-80 sm:w-72 h-56 flex items-end justify-start bg-[url('/static/images/pexels-gustavo-fring-4173239.jpg')] bg-cover bg-center bg-no-repeat shadow-md border-gray-400 border hover:scale-110 transition delay-75 ease-in-out">
                        
                        <h1 class="font-bold left-0 text-md absolute bg-[rgb(48,122,96)] text-white p-1 m-3 border-l-[rgb(255,124,48)] border-l-4">Dr. Lorem, ipsum.</h1>

                        <div class="bg-[rgba(24,18,18,0.6)] w-full p-2 h-full opacity-0  hover:opacity-75 transition ease-in-out delay-100  ">
                            <h1 class="font-bold text-lg underline text-white">Dr. Lorem, ipsum.</h1>
                            <p class="text-sm font-semibold text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, harum. Vero, tempora ducimus eius temporibus obcaecati iure labore qui omnis accusamus doloremque magnam eveniet cumque exercitationem dolores aut, quis error.</p>
                        </div>
                    </div>
                </li>
                
                <li class="card_slider cursor-pointer w-[100vw] flex justify-center sm:flex-none sm:w-fit" >
                    <!-- todo js script needed for animation -->
                    <div class="relative w-80 sm:w-72 h-56 flex items-end justify-start bg-[url('/static/images/pexels-gustavo-fring-4173239.jpg')] bg-cover bg-center bg-no-repeat shadow-md border-gray-400 border hover:scale-110 transition delay-75 ease-in-out">
                        
                        <h1 class="font-bold left-0 text-md absolute bg-[rgb(48,122,96)] text-white p-1 m-3 border-l-[rgb(255,124,48)] border-l-4">Dr. Lorem, ipsum.</h1>

                        <div class="bg-[rgba(24,18,18,0.6)] w-full p-2 h-full opacity-0  hover:opacity-75 transition ease-in-out delay-100  ">
                            <h1 class="font-bold text-lg underline text-white">Dr. Lorem, ipsum.</h1>
                            <p class="text-sm font-semibold text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, harum. Vero, tempora ducimus eius temporibus obcaecati iure labore qui omnis accusamus doloremque magnam eveniet cumque exercitationem dolores aut, quis error.</p>
                        </div>
                    </div>
                </li>
                
                
            </ul>
        </section>

        <!-- split -->
        <section class="_contactus grid sm:grid-cols-2 items-center">
            <div class="p-5 bg-[rgb(255,124,48)] my-5 px-10 h-full">
                <div class="">
                    <h1 class="text-3xl sm:text-4xl font-bold text-white border-spacing-3 border-b-4 border-white w-fit shadow-sm">Facing Any Problem? Contact us</h1>
                    <p class="text-white  font-semibold text-sm my-3">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Facere ducimus, ut corporis minima quidem, error distinctio animi unde obcaecati sit alias
                        vero optio tempora perspiciatis eos consequatur, voluptatum in mollitia.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa veniam error aperiam, odit officiis molestiae dignissimos? Sint, debitis. Cum adipisci rem doloremque ex necessitatibus voluptate cumque ducimus tempore nostrum aperiam!
                    </p>
                    
                </div>
    
            </div>
            <div class="p-5 bg-[rgba(48,122,96,0.99)] h-full grid items-center">
                <form action="" class="sm:w-1/2 m-auto">
                    <!-- email -->
                    <label for="email" class="capitalize block font-semibold text-lg text-white">enter your email</label>
                    <input type="email" name="email" id="email" required placeholder="something@gmail.com" class="my-2 p-2 rounded-md focus:outline-[rgb(255,124,48)] w-full text-gray-700">
                    <!-- query -->
                    <label for="query" class="capitalize block font-semibold text-lg text-white">enter your questions</label>
                    <textarea name="query" id="query" required placeholder="enter your text" cols="5" rows="5" class="my-2 p-2 rounded-md focus:outline-[rgb(255,124,48)] w-full text-gray-700"></textarea>
                    <button class="transition delay-100 ease-in-out py-2 px-3 rounded-md shadow-md bg-[rgb(255,124,48)] text-gray-100 hover:bg-white hover:text-gray-800 font-semibold text-sm w-full">
                    Submit
                </button>

                </form>
            </div>
        </section>
    </main>
    <footer class="md:grid md:grid-rows-4 h-96">
        <section class=" md:row-span-3 grid md:grid-cols-4 py-6 ">

            <div class="my-5 md:col-span-3 grid space-y-6 sm:space-y-0 sm:grid-cols-3 items-start justify-center md:border-r-2 md:border-r-[rgba(48,122,96,0.99)]">
                <ul class="grid items-start justify-center space-y-3 ">
                    <li class="capitalize font-bold underline-offset-4 text-[rgba(48,122,96,0.99)] text-xl underline">medial items</li>
                    <div class="space-y-3">

                        <li><a class="text-sm font-bold capitalize hover:text-cyan-700 text-gray-800" href="#">Lorem, ipsum dolor.</a></li>
                        <li><a class="text-sm font-bold capitalize hover:text-cyan-700 text-gray-800" href="#">Lorem, ipsum dolor.</a></li>
                    <li><a class="text-sm font-bold capitalize hover:text-cyan-700 text-gray-800" href="#">Lorem, ipsum dolor.</a></li>
                    <li><a class="text-sm font-bold capitalize hover:text-cyan-700 text-gray-800" href="#">Lorem, ipsum dolor.</a></li>
                </div>
                </ul>                

                <ul class="grid items-start justify-center space-y-3">
                
                    <li class="capitalize font-bold underline-offset-4 text-[rgba(48,122,96,0.99)] text-xl underline">Service</li>
                    <div class="space-y-3">
                
                    <li><a class="text-sm font-bold capitalize hover:text-cyan-700 text-gray-800" href="#">Lorem, ipsum dolor.</a></li>
                    <li><a class="text-sm font-bold capitalize hover:text-cyan-700 text-gray-800" href="#">Lorem, ipsum dolor.</a></li>
                    <li><a class="text-sm font-bold capitalize hover:text-cyan-700 text-gray-800" href="#">Lorem, ipsum dolor.</a></li>
                    </div>
                </ul>                
                <ul class="grid items-start justify-center space-y-3">
                    <li class="capitalize font-bold underline-offset-4 text-[rgba(48,122,96,0.99)] text-xl underline">blog</li>
                    <div class="space-y-3">
                    
                    <li><a class="text-sm font-bold capitalize hover:text-cyan-700 text-gray-800" href="#">Lorem, ipsum dolor.</a></li>
                    <li><a class="text-sm font-bold capitalize hover:text-cyan-700 text-gray-800" href="#">Lorem, ipsum dolor.</a></li>
                    </div>
                </ul>                
            </div>
            <div class="_Sponcers ">
                <h1 class="text-2xl text-[rgba(48,122,96,0.99)] font-bold text-center capitalize underline-offset-4 underline">Our Sponsers</h1>
                <div class="flex items-center justify-center flex-wrap">
                    <span><img src="{{ asset('icons/png1.png') }}" alt="sp1" height="48" width="48" class="list-none list-inside m-4"></span>
                    <span><img src="{{ asset('icons/png2.png')}}" alt="sp1" height="48" width="48" class="list-none list-inside m-4"></span>
                    <span><img src="{{ asset('icons/png3.png')}}" alt="sp1" height="48" width="48" class="list-none list-inside m-4"></span>
                    <span><img src="{{ asset('icons/png4.png')}}" alt="sp1" height="48" width="48" class="list-none list-inside m-4"></span>
                    <span><img src="{{ asset('icons/png5.png')}}" alt="sp1" height="48" width="48" class="list-none list-inside m-4"></span>
                </div>
            </div>
        </section>
        <section class="bg-[rgba(48,122,96,0.99)] row-span-1 flex justify-around items-center flex-wrap p-4">
            <div><a class="flex items-center justify-center" href="index.php">
                <img class="h-8 w-8 mr-4" src="{{ asset('images/logo.png')}}" alt="logo">
                <h1 class="font-bold text-white">MediHub.com</h1>
            </a></div>
            <p class="font-semibold text-center capitalize text-white text-sm flex justify-center m-2">All rights are Resurved &COPY; MediHub.com</p>
            <!-- social media -->
            <div class=" flex justify-center items-center space-x-3">
                <a href="#fb"><img src="{{ asset('icons/fb.png')}}" alt="sp1" height="48" width="48" class="list-none list-inside "></a>
                <a href="#tw"><img src="{{ asset('icons/insta.png')}}" alt="sp1" height="50" width="50" class="list-none list-inside "></a>
                <a href="#ig"><img src="{{ asset('icons/tw.png')}}" alt="sp1" height="48" width="48" class="list-none list-inside "></a>
            </div>
        </section>
        <!--scripts  -->
        <script src="{{ asset('js/slider.js')}}"></script>
        <script src="{{ asset('js/dropdown.js')}}"></script>
        <script src="{{ asset('js/cross_btn.js')}}"></script>

    </footer>
</body>

</html>