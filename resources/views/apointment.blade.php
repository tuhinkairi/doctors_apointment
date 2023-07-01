<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apointment | MediHub.com</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>

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
                <div id="dropdown_button"
                    class="cursor-pointer relative  text-center font-bold text-white hover:underline underline-offset-4">
                    <span class="w-full px-4 py-1 mx-[.5px]" onclick="dropdown()">Explore</span>
                    <ul id="dropdown_items"
                        class=" hidden absolute bg-[rgb(48,122,96)] pt-3 -right-4 w-auto capitalize shadow-lg transition delay-75 ease-in-out">

                        <li class="w-full hover:bg-white hover:shadow-md p-2 px-4 hover:text-[rgb(48,122,96)]">apintment
                        </li>
                        <li class="w-full hover:bg-white hover:shadow-md p-2 px-4 hover:text-[rgb(48,122,96)]">apintment
                        </li>
                        <li class="w-full hover:bg-white hover:shadow-md p-2 px-4 hover:text-[rgb(48,122,96)]">apintment
                        </li>
                        <li class="w-full hover:bg-white hover:shadow-md p-2 px-4 hover:text-[rgb(48,122,96)]">apintment
                        </li>
                    </ul>
                </div>
                <li><a class="px-4 py-1 mx-[.5px] text-center font-bold text-white hover:underline underline-offset-4"
                        href="about.html">About</a></li>
                <li><a class="px-4 py-1 mx-[.5px] text-center font-bold text-white hover:underline underline-offset-4"
                        href="contact.hmtl">Contact</a></li>
                <li><a href="/register"
                        class="transition delay-100 ease-in-out mr-6 py-1 px-3 rounded-md shadow-md bg-[rgb(255,124,48)] text-gray-100 hover:bg-white hover:text-gray-800 font-semibold text-sm ">Creat
                        New</a></li>
            </ul>
            <!-- small nav bar -->
            <button id="menu_btn" class="md:hidden grid justify-end mr-6 my-1 list-none cursor-pointer"
                onclick="cross()">
                <li id="one_line" class="py-[2px] px-4 my-[2px] bg-white rounded-full transition delay-0 ease-in-out">
                </li>
                <li id="two_line" class="py-[2px] px-4 my-[2px] bg-white rounded-full transition delay-200 ease-in-out">
                </li>
                <li id="three_line"
                    class="py-[2px] px-4 my-[2px] bg-white rounded-full transition delay-200 ease-in-out"></li>
            </button>

        </nav>
        <nav id="mini_nav" class=" transition delay-250 ease-in-out translate-x-[100vw]">
            <ul class=" p-5 w-full bg-[rgba(0,0,0,0.5)] rounded-md">

                <li><a class="block capitalize p-2 text-center hover:bg-white hover:text-[rgb(48,122,96)] rounded-md font-bold text-md text-white"
                        href="/">Home</a></li>
                <li><a class="block capitalize p-2 text-center hover:bg-white hover:text-[rgb(48,122,96)] rounded-md font-bold text-md text-white"
                        href="/apointment">apointments</a></li>
                <li><a class="block capitalize p-2 text-center hover:bg-white hover:text-[rgb(48,122,96)] rounded-md font-bold text-md text-white"
                        href="/">services</a></li>
                <li><a class="block capitalize p-2 text-center hover:bg-white hover:text-[rgb(48,122,96)] rounded-md font-bold text-md text-white"
                        href="#search">doctors</a></li>
                <li><a class="block capitalize p-2 text-center hover:bg-white hover:text-[rgb(48,122,96)] rounded-md font-bold text-md text-white"
                        href="/#about">about</a></li>
                <li><a class="block capitalize p-2 text-center hover:bg-white hover:text-[rgb(48,122,96)] rounded-md font-bold text-md text-white"
                        href="/#contact">contact</a></li>
                <li><a class="block capitalize p-2 text-center hover:bg-white hover:text-[rgb(48,122,96)] rounded-md font-bold text-md text-white"
                        href="/register">creat new</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section
            class="_banner bg-[url('/static/images/background.jpg')] bg-cover h-[450px] md:h-[65vw] bg-right lg:h-[45vw]">
            <div class="absolute top-0 w-full h-[450px] z-0 backdrop-blur-[5px] sm:hidden "></div>
            <div class="text-center sm:text-left sm:w-2/3 lg:w-1/2 px-6 sm:pl-4 md:pl-12 lg:pl-16 relative top-[35%]">
                <h1 class="font-bold text-3xl md:text-4xl text-gray-800">Lorem ipsum dolor sit amet consectetur.</h1>
                <h2 class="font-bold sm:text-md  text-rose-600 my-2">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Quas odio aliquid saepe laboriosam nam a?</h2>
                <button
                    class="transition delay-100 ease-in-out py-2 px-3 rounded-md shadow-md bg-[rgb(255,124,48)] text-gray-100 hover:bg-white hover:text-gray-800 font-semibold text-sm ">Book
                    Apointment</button>
            </div>
        </section>
        <!-- section of doctors -->
        <section>

            <!-- suggetions -->
            <section class="_docslider relative h-96 flex flex-col items-start justify-center w-auto">
                <button id="lbtn"
                    class="h-16 w-16 rounded-full absolute left-0  z-10  flex items-center justify-center hover:bg-[rgba(0,0,0,.3)] transition ease-out delay-75 "><img
                        class="rotate-180" src="{{ asset('icons/right.png')}}" alt="left_btn"></button>
                <button id="rbtn"
                    class="h-16 w-16 rounded-full absolute right-0 z-10   flex items-center justify-center hover:bg-[rgba(0,0,0,.3)] transition ease-out delay-75 "><img
                        src="{{ asset('icons/right.png')}}" alt="right_btn"></button>
                <div class="flex w-full items-center">
                    <h1
                        class=" my-5 m-auto capitalize text-gray-700 font-bold text-4xl pb-2 w-fit border-b-4 border-[rgb(48,122,96)]">
                        top suggetions</h1>
                </div>
                <ul id="doc_slider"
                    class="flex items-center justify-start py-5 sm:px-5 md:px-10  sm:space-x-5 transition ease-in-out delay-75">
                    <li class="card_slider cursor-pointer w-[100vw] flex justify-center sm:flex-none sm:w-fit">
                        <!-- todo js script needed for animation -->
                        <div
                            class="relative w-80 sm:w-72 h-56 flex items-end justify-start bg-[url('/static/images/pexels-gustavo-fring-4173239.jpg')] bg-cover bg-center bg-no-repeat shadow-md border-gray-400 border hover:scale-110 transition delay-75 ease-in-out">

                            <h1
                                class="font-bold left-0 text-md absolute bg-[rgb(48,122,96)] text-white p-1 m-3 border-l-[rgb(255,124,48)] border-l-4">
                                Dr. Lorem, ipsum.</h1>

                            <div
                                class="bg-[rgba(24,18,18,0.6)] w-full p-2 h-full opacity-0  hover:opacity-75 transition ease-in-out delay-100  ">
                                <h1 class="font-bold text-lg underline text-white">Dr. Lorem, ipsum.</h1>
                                <p class="text-sm font-semibold text-white">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Mollitia, harum. Vero, tempora ducimus eius temporibus obcaecati
                                    iure labore qui omnis accusamus doloremque magnam eveniet cumque exercitationem
                                    dolores aut, quis error.</p>
                            </div>
                        </div>
                    </li>

                    <li class="card_slider cursor-pointer w-[100vw] flex justify-center sm:flex-none sm:w-fit">
                        <!-- todo js script needed for animation -->
                        <div
                            class="relative w-80 sm:w-72 h-56 flex items-end justify-start bg-[url('/static/images/pexels-gustavo-fring-4173239.jpg')] bg-cover bg-center bg-no-repeat shadow-md border-gray-400 border hover:scale-110 transition delay-75 ease-in-out">

                            <h1
                                class="font-bold left-0 text-md absolute bg-[rgb(48,122,96)] text-white p-1 m-3 border-l-[rgb(255,124,48)] border-l-4">
                                Dr. Lorem, ipsum.</h1>

                            <div
                                class="bg-[rgba(24,18,18,0.6)] w-full p-2 h-full opacity-0  hover:opacity-75 transition ease-in-out delay-100  ">
                                <h1 class="font-bold text-lg underline text-white">Dr. Lorem, ipsum.</h1>
                                <p class="text-sm font-semibold text-white">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Mollitia, harum. Vero, tempora ducimus eius temporibus obcaecati
                                    iure labore qui omnis accusamus doloremque magnam eveniet cumque exercitationem
                                    dolores aut, quis error.</p>
                            </div>
                        </div>
                    </li>

                    <li class="card_slider cursor-pointer w-[100vw] flex justify-center sm:flex-none sm:w-fit">
                        <!-- todo js script needed for animation -->
                        <div
                            class="relative w-80 sm:w-72 h-56 flex items-end justify-start bg-[url('/static/images/pexels-gustavo-fring-4173239.jpg')] bg-cover bg-center bg-no-repeat shadow-md border-gray-400 border hover:scale-110 transition delay-75 ease-in-out">

                            <h1
                                class="font-bold left-0 text-md absolute bg-[rgb(48,122,96)] text-white p-1 m-3 border-l-[rgb(255,124,48)] border-l-4">
                                Dr. Lorem, ipsum.</h1>

                            <div
                                class="bg-[rgba(24,18,18,0.6)] w-full p-2 h-full opacity-0  hover:opacity-75 transition ease-in-out delay-100  ">
                                <h1 class="font-bold text-lg underline text-white">Dr. Lorem, ipsum.</h1>
                                <p class="text-sm font-semibold text-white">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Mollitia, harum. Vero, tempora ducimus eius temporibus obcaecati
                                    iure labore qui omnis accusamus doloremque magnam eveniet cumque exercitationem
                                    dolores aut, quis error.</p>
                            </div>
                        </div>
                    </li>

                    <li class="card_slider cursor-pointer w-[100vw] flex justify-center sm:flex-none sm:w-fit">
                        <!-- todo js script needed for animation -->
                        <div
                            class="relative w-80 sm:w-72 h-56 flex items-end justify-start bg-[url('/static/images/pexels-gustavo-fring-4173239.jpg')] bg-cover bg-center bg-no-repeat shadow-md border-gray-400 border hover:scale-110 transition delay-75 ease-in-out">

                            <h1
                                class="font-bold left-0 text-md absolute bg-[rgb(48,122,96)] text-white p-1 m-3 border-l-[rgb(255,124,48)] border-l-4">
                                Dr. Lorem, ipsum.</h1>

                            <div
                                class="bg-[rgba(24,18,18,0.6)] w-full p-2 h-full opacity-0  hover:opacity-75 transition ease-in-out delay-100  ">
                                <h1 class="font-bold text-lg underline text-white">Dr. Lorem, ipsum.</h1>
                                <p class="text-sm font-semibold text-white">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Mollitia, harum. Vero, tempora ducimus eius temporibus obcaecati
                                    iure labore qui omnis accusamus doloremque magnam eveniet cumque exercitationem
                                    dolores aut, quis error.</p>
                            </div>
                        </div>
                    </li>

                    <li class="card_slider cursor-pointer w-[100vw] flex justify-center sm:flex-none sm:w-fit">
                        <!-- todo js script needed for animation -->
                        <div
                            class="relative w-80 sm:w-72 h-56 flex items-end justify-start bg-[url('static/images/pexels-gustavo-fring-4173239.jpg')] bg-cover bg-center bg-no-repeat shadow-md border-gray-400 border hover:scale-110 transition delay-75 ease-in-out">

                            <h1
                                class="font-bold left-0 text-md absolute bg-[rgb(48,122,96)] text-white p-1 m-3 border-l-[rgb(255,124,48)] border-l-4">
                                Dr. Lorem, ipsum.</h1>

                            <div
                                class="bg-[rgba(24,18,18,0.6)] w-full p-2 h-full opacity-0  hover:opacity-75 transition ease-in-out delay-100  ">
                                <h1 class="font-bold text-lg underline text-white">Dr. Lorem, ipsum.</h1>
                                <p class="text-sm font-semibold text-white">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Mollitia, harum. Vero, tempora ducimus eius temporibus obcaecati
                                    iure labore qui omnis accusamus doloremque magnam eveniet cumque exercitationem
                                    dolores aut, quis error.</p>
                            </div>
                        </div>
                    </li>

                    <li class="card_slider cursor-pointer w-[100vw] flex justify-center sm:flex-none sm:w-fit">
                        <!-- todo js script needed for animation -->
                        <div
                            class="relative w-80 sm:w-72 h-56 flex items-end justify-start bg-[url('static/images/pexels-gustavo-fring-4173239.jpg')] bg-cover bg-center bg-no-repeat shadow-md border-gray-400 border hover:scale-110 transition delay-75 ease-in-out">

                            <h1
                                class="font-bold left-0 text-md absolute bg-[rgb(48,122,96)] text-white p-1 m-3 border-l-[rgb(255,124,48)] border-l-4">
                                Dr. Lorem, ipsum.</h1>

                            <div
                                class="bg-[rgba(24,18,18,0.6)] w-full p-2 h-full opacity-0  hover:opacity-75 transition ease-in-out delay-100  ">
                                <h1 class="font-bold text-lg underline text-white">Dr. Lorem, ipsum.</h1>
                                <p class="text-sm font-semibold text-white">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Mollitia, harum. Vero, tempora ducimus eius temporibus obcaecati
                                    iure labore qui omnis accusamus doloremque magnam eveniet cumque exercitationem
                                    dolores aut, quis error.</p>
                            </div>
                        </div>
                    </li>

                    <li class="card_slider cursor-pointer w-[100vw] flex justify-center sm:flex-none sm:w-fit">
                        <!-- todo js script needed for animation -->
                        <div
                            class="relative w-80 sm:w-72 h-56 flex items-end justify-start bg-[url('static/images/pexels-gustavo-fring-4173239.jpg')] bg-cover bg-center bg-no-repeat shadow-md border-gray-400 border hover:scale-110 transition delay-75 ease-in-out">

                            <h1
                                class="font-bold left-0 text-md absolute bg-[rgb(48,122,96)] text-white p-1 m-3 border-l-[rgb(255,124,48)] border-l-4">
                                Dr. Lorem, ipsum.</h1>

                            <div
                                class="bg-[rgba(24,18,18,0.6)] w-full p-2 h-full opacity-0  hover:opacity-75 transition ease-in-out delay-100  ">
                                <h1 class="font-bold text-lg underline text-white">Dr. Lorem, ipsum.</h1>
                                <p class="text-sm font-semibold text-white">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Mollitia, harum. Vero, tempora ducimus eius temporibus obcaecati
                                    iure labore qui omnis accusamus doloremque magnam eveniet cumque exercitationem
                                    dolores aut, quis error.</p>
                            </div>
                        </div>
                    </li>


                </ul>
            </section>
            <!-- search -->
            <div class="searchba w-full mb-3">
                <form action="" class="search_form w-96 flex m-auto">
                    <input type="search" name="search" id="search"
                        class=" p-1 text-gray-800 border outline-[rgb(255,124,48)] focus:outline rounded-md shadow-md w-full"
                        placeholder="search doctors">
                    <button type="submit"
                        class="p-1 px-2 rounded-md  font-semibold mx-3 bg-[rgb(48,122,96)]  text-white hover:bg-[rgb(255,124,48)] transition delay-100 ease-in-out shadow-md">Search</button>
                </form>
            </div>
 <!-- doctors show -->
 <div class="px-3 hidden">
     <ul role="list" class="divide-y divide-gray-100">
         <li class="flex justify-between gap-x-6 py-5">
    <div class="flex gap-x-4">
      <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
      <div class="min-w-0 flex-auto">
        <p class="text-sm font-semibold leading-6 text-gray-900">Leslie Alexander</p>
        <p class="mt-1 truncate text-xs leading-5 text-gray-500">leslie.alexander@example.com</p>
      </div>
    </div>
    <div class="hidden sm:flex sm:flex-col sm:items-end">
      <p class="text-sm leading-6 text-gray-900">Co-Founder / CEO</p>
      <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
    </div>
  </li>
  <li class="flex justify-between gap-x-6 py-5">
    <div class="flex gap-x-4">
      <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
      <div class="min-w-0 flex-auto">
        <p class="text-sm font-semibold leading-6 text-gray-900">Michael Foster</p>
        <p class="mt-1 truncate text-xs leading-5 text-gray-500">michael.foster@example.com</p>
      </div>
    </div>
    <div class="hidden sm:flex sm:flex-col sm:items-end">
      <p class="text-sm leading-6 text-gray-900">Co-Founder / CTO</p>
      <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
    </div>
</li>

</ul>
</div>

 <!-- doctors show end -->
            <div class="apointment_form mt-10 bg-[rgb(48,122,96)]">
                <h1 class="text-white text-2xl font-bold p-5">Book Apointment</h1>
            </div>
            <form action="/apointment/bookapointment" method="post" class="text-lg p-10 px-3 text-gray-700 md:w-[650px] capitalize space-y-3 m-auto">
                @csrf
                <!-- doctor type -->
                <div class=" flex justify-between">
                    <label for="doctor_type" class="font-bold">Doctor Type :</label>
                    <select type="text" name="doctor_type" id="doctor_type" class="border rounded-md p-1 outline-[rgb(255,124,48)] bg-white text-center focus:outline" placeholder="Doctor type" required>
                        <option value="Pediatrician">Pediatrician</option>
                        <option value="Obstetricians/gynecologist (OBGYNs)">Obstetricians/gynecologist (OBGYNs)</option>
                        <option value="Cardiologist">Cardiologist</option>
                        <option value="Oncologist">Oncologist</option>
                        <option value="Gastroenterologist">Gastroenterologist</option>
                        <option value="Pulmonologist">Pulmonologist</option>
                        <option value="Infectious disease">Infectious disease</option>
                        <option value="Nephrologist">Nephrologist</option>
                        <option value="Endocrinologist">Endocrinologist</option>
                        <option value="Ophthalmologist">Ophthalmologist</option>
                        <option value="Otolaryngologist">Otolaryngologist</option>
                        <option value="Dermatologist">Dermatologist</option>
                        <option value="Psychiatrist">Psychiatrist</option>
                        <option value="Neurologist">Neurologist</option>
                        <option value="Radiologist">Radiologist</option>
                        <option value="Anesthesiologist">Anesthesiologist</option>
                        <option value="Surgeon">Surgeon</option>
                        <option value="Physician executive">Physician executive</option>
                    </select>
                </div>
                <!-- doctor name -->
                <div class=" flex justify-between">
                    <label for="doctor_name" class="font-bold">Doctor Name :</label>
                    <select type="text" name="doctor_name" id="doctor_name" class="border rounded-md p-1 outline-[rgb(255,124,48)] bg-white text-center focus:outline" placeholder="Doctor Name" required>
                        <option value="Dr. Lorem, ipsum.">Dr. Lorem, ipsum.</option>
                        <option value="Dr. Lorem, ipsum dolor.">Dr. Lorem, ipsum dolor.</option>
                    </select>
                </div>
                <!-- patient name-->
                <div class=" flex justify-between">
                    <label for="patient_name" class="font-bold">Patient Name :</label>
                    <input type="text" name="patient_name" class="border rounded-md p-1 outline-[rgb(255,124,48)] focus:outline w-60" id="patient_name" placeholder="Patient Name">
                </div>
                <!-- gender name -->
                <div class=" flex justify-between">
                    <label for="gender" class="font-bold">Gender :</label>
                    <select type="text" name="gender" id="gender" class="border rounded-md p-1 outline-[rgb(255,124,48)] bg-white text-center focus:outline" placeholder="gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <!-- date -->
                <div class=" flex justify-between">
                    <label for="date" class="font-bold">Date :</label>
                    <input type="date" name="apointment_date" id="date" class="border rounded-md p-1 outline-[rgb(255,124,48)] focus:outline">
                </div>
                <!-- contact -->
                <div class=" flex justify-between">
                    <label for="contact_email" class="font-bold">email :</label>
                    <input type="email" name="email" id="contact_email" class="border rounded-md p-1 outline-[rgb(255,124,48)] focus:outline" readonly value="something@gmail.com">
                </div>
                <div class="w-full flex">

                    <button type="submit" class="font-bold rounded-md bg-[rgb(255,124,48)] text-white p-2 m-auto hover:bg-[rgb(48,122,96)] transition delay-200 ease-in-out shadow-md">Book Apointmet</button>
                </div>
                </form>
        </section>
    </main>
    <hr>
    <footer class="md:grid md:grid-rows-4 h-96">
        <section class=" md:row-span-3 grid md:grid-cols-4 py-6 ">

            <div
                class="my-5 md:col-span-3 grid space-y-6 sm:space-y-0 sm:grid-cols-3 items-start justify-center md:border-r-2 md:border-r-[rgba(48,122,96,0.99)]">
                <ul class="grid items-start justify-center space-y-3 ">
                    <li class="capitalize font-bold underline-offset-4 text-[rgba(48,122,96,0.99)] text-xl underline">
                        medial items</li>
                    <div class="space-y-3">

                        <li><a class="text-sm font-bold capitalize hover:text-cyan-700 text-gray-800" href="#">Lorem,
                                ipsum dolor.</a></li>
                        <li><a class="text-sm font-bold capitalize hover:text-cyan-700 text-gray-800" href="#">Lorem,
                                ipsum dolor.</a></li>
                        <li><a class="text-sm font-bold capitalize hover:text-cyan-700 text-gray-800" href="#">Lorem,
                                ipsum dolor.</a></li>
                        <li><a class="text-sm font-bold capitalize hover:text-cyan-700 text-gray-800" href="#">Lorem,
                                ipsum dolor.</a></li>
                    </div>
                </ul>

                <ul class="grid items-start justify-center space-y-3">

                    <li class="capitalize font-bold underline-offset-4 text-[rgba(48,122,96,0.99)] text-xl underline">
                        Service</li>
                    <div class="space-y-3">

                        <li><a class="text-sm font-bold capitalize hover:text-cyan-700 text-gray-800" href="#">Lorem,
                                ipsum dolor.</a></li>
                        <li><a class="text-sm font-bold capitalize hover:text-cyan-700 text-gray-800" href="#">Lorem,
                                ipsum dolor.</a></li>
                        <li><a class="text-sm font-bold capitalize hover:text-cyan-700 text-gray-800" href="#">Lorem,
                                ipsum dolor.</a></li>
                    </div>
                </ul>
                <ul class="grid items-start justify-center space-y-3">
                    <li class="capitalize font-bold underline-offset-4 text-[rgba(48,122,96,0.99)] text-xl underline">
                        blog</li>
                    <div class="space-y-3">

                        <li><a class="text-sm font-bold capitalize hover:text-cyan-700 text-gray-800" href="#">Lorem,
                                ipsum dolor.</a></li>
                        <li><a class="text-sm font-bold capitalize hover:text-cyan-700 text-gray-800" href="#">Lorem,
                                ipsum dolor.</a></li>
                    </div>
                </ul>
            </div>
            <div class="_Sponcers ">
                <h1
                    class="text-2xl text-[rgba(48,122,96,0.99)] font-bold text-center capitalize underline-offset-4 underline">
                    Our Sponsers</h1>
                <div class="flex items-center justify-center flex-wrap">
                    <span><img src="{{ asset('icons/png1.png')}}" alt="sp1" height="48" width="48"
                            class="list-none list-inside m-4"></span>
                    <span><img src="{{ asset('icons/png2.png')}}" alt="sp1" height="48" width="48"
                            class="list-none list-inside m-4"></span>
                    <span><img src="{{ asset('icons/png3.png')}}" alt="sp1" height="48" width="48"
                            class="list-none list-inside m-4"></span>
                    <span><img src="{{ asset('icons/png4.png')}}" alt="sp1" height="48" width="48"
                            class="list-none list-inside m-4"></span>
                    <span><img src="{{ asset('icons/png5.png')}}" alt="sp1" height="48" width="48"
                            class="list-none list-inside m-4"></span>
                </div>
            </div>
        </section>
        <section class="bg-[rgba(48,122,96,0.99)] row-span-1 flex justify-around items-center flex-wrap p-4">
            <div><a class="flex items-center justify-center" href="index.php">
                    <img class="h-8 w-8 mr-4" src="{{ asset('images/logo.png')}}" alt="logo">
                    <h1 class="font-bold text-white">MediHub.com</h1>
                </a></div>
            <p class="font-semibold text-center capitalize text-white text-sm flex justify-center m-2">All rights are
                Resurved &COPY; MediHub.com</p>
            <!-- social media -->
            <div class=" flex justify-center items-center space-x-3">
                <a href="#fb"><img src="{{ asset('icons/fb.png')}}" alt="sp1" height="48" width="48"
                        class="list-none list-inside "></a>
                <a href="#tw"><img src="{{ asset('icons/insta.png')}}" alt="sp1" height="50" width="50"
                        class="list-none list-inside "></a>
                <a href="#ig"><img src="{{ asset('icons/tw.png')}}" alt="sp1" height="48" width="48"
                        class="list-none list-inside "></a>
            </div>
        </section>
        <!--scripts  -->
        <script src="{{ asset('js/slider.js')}}"></script>
        <script src="{{ asset('js/dropdown.js')}}"></script>
        <script src="{{ asset('js/cross_btn.js')}}"></script>

    </footer>
</body>

</html>