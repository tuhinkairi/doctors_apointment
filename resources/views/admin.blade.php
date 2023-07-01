<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | MediHub.com</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png')}}" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
  <nav class="bg-[rgb(48,122,96)]">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="{{ asset('images/logo.png')}}" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-white text-white", Default: "text-gray-300 hover:bg-white hover:text-[rgb(48,122,96)]" -->
              <a href="#" class="bg-white text-[rgb(48,122,96)] rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Dashboard</a>
              <a href="#" class="text-gray-300 hover:bg-white hover:text-[rgb(48,122,96)] rounded-md px-3 py-2 text-sm font-medium">Team</a>
              <a href="#" class="text-gray-300 hover:bg-white hover:text-[rgb(48,122,96)] rounded-md px-3 py-2 text-sm font-medium">Projects</a>
              <a href="#" class="text-gray-300 hover:bg-white hover:text-[rgb(48,122,96)] rounded-md px-3 py-2 text-sm font-medium">Calendar</a>
              <a href="#" class="text-gray-300 hover:bg-white hover:text-[rgb(48,122,96)] rounded-md px-3 py-2 text-sm font-medium">Reports</a>
            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            
            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button" id="profile" class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
              </div>

              <div id="drop_profile" class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
              </div>
            </div>
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" id="dashbord_menu_btn" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-white hover:text-[rgb(48,122,96)] focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <!-- Current: "bg-white text-white", Default: "text-gray-300 hovewhite-gray-700 hover:text-[rgb(48,122,96)]" -->
        <a href="#" class="bg-white text-black block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
        <a href="#" class="text-white hover:bg-white hover:text-[rgb(48,122,96)] block rounded-md px-3 py-2 text-base font-medium">Team</a>
        <a href="#" class="text-white hover:bg-white hover:text-[rgb(48,122,96)] block rounded-md px-3 py-2 text-base font-medium">Projects</a>
        <a href="#" class="text-white hover:bg-white hover:text-[rgb(48,122,96)] block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
        <a href="#" class="text-white hover:bg-white hover:text-[rgb(48,122,96)] block rounded-md px-3 py-2 text-base font-medium">Reports</a>
      </div>
      <div class="border-t border-gray-700 pb-3 pt-4">
        <div class="flex items-center px-5">
          <div class="flex-shrink-0">
            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </div>
          <div class="ml-3">
            <div class="text-base font-medium leading-none text-white">Tom Cook</div>
            <div class="text-sm font-medium leading-none text-white">tom@example.com</div>
          </div>
          
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-white hover:text-[rgb(48,122,96)]">Your Profile</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-white hover:text-[rgb(48,122,96)]">Settings</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-white hover:text-[rgb(48,122,96)]">Sign out</a>
        </div>
      </div>
    </div>
  </nav>

  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- content -->

      
      <!-- doctors show -->
 <div class="px-3">
     <ul role="list" class="divide-y divide-gray-100">
      @foreach ( $data as $customer)
         <li class="flex justify-between gap-x-6 py-5">
    <div class="flex gap-x-4">
      <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
      <div class="min-w-0 flex-auto">
        <p class="text-sm font-semibold leading-6 text-gray-900">{{$customer->doctor_name}}</p>
        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$customer->doctor_id}}</p>
      </div>
    </div>
    <div class="hidden sm:flex sm:flex-col sm:items-end">
      <p class="text-sm leading-6 text-gray-900">{{$customer->doctore_type}}</p>
      <p class="mt-1 text-xs leading-5 text-gray-500">{{$customer->apointment_date}}<time datetime="2023-01-23T13:23Z">date</time></p>
      <a href="{{url('/cancel/')}}/{{ $customer->id }}" class="p-2 text-semibold  rounded-md bg-red-400 text-white hover:bg-red-500">
        <button>Delete</button>
</a>
    </div>
  </li>
  @endforeach
</ul>
</div>

    </div>
    
    <div class="text-center text-blue-500 text-lg font-bold"><a href="/download-pdf">download pdf</a></div>
  </main>
</div>
<script>
  let btn_profile = document.getElementById('profile')
  let profile_option = document.getElementById('drop_profile')
  btn_profile.addEventListener('click',()=>{
    profile_option.classList.toggle('hidden')
  })

  //menu
  document.getElementById('dashbord_menu_btn').addEventListener('click',()=>{

    document.getElementById('mobile-menu').classList.toggle('hidden')
  })

</script>
</body>
</html>