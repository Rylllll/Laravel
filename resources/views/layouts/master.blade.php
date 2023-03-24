<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../img/Logo.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
     @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <link href="./app.css" rel="stylesheet">
    <title>Travel around the world</title>
</head>


<nav class="fixed w-full mx-auto top-0 z-50 bg-transparent shadow-md transition duration-300 transform --translate-x-full items-center justify-between">

  <div class="flex items-center justify-between bg-white shadow-lg shadow-black-500/100 p-4 font-bold ">
      <div class="">
          <img src="../img/7wonders.png " alt=" ">
      </div>
      <div class="hidden md:flex space-x-20 ">
          <a href="#van">About</a>
          <a href="#gallery">Gallery</a>
          <a href="# ">Contact</a>
      </div>
      <div class="flex justify-between space-x-2">
        @auth
        <span class="p-4 font-bold uppercase">Welcome, {{ auth()->user()->name }}!</span>

        <form method="POST" action="/logout" class="text-xs font-semibold text-blue-500 ml-6">
            @csrf

            
            <button  type="submit" class="group relative inline-block overflow-hidden border border-[#212121] px-8 py-3 focus:outline-none focus:ring" href="/download">
              <span class="absolute inset-x-0 bottom-0 h-[2px] bg-[#212121] transition-all group-hover:h-full group-active:bg-[#212121]"></span>
         
              <span class="relative text-sm font-medium text-[#212121] transition-colors group-hover:text-white">
       
              Log out
              </span></button>
        </form>
    @else
        
        <a  href="/register" class="group relative inline-block overflow-hidden border border-[#212121] px-8 py-3 focus:outline-none focus:ring" href="/download">
          <span class="absolute inset-x-0 bottom-0 h-[2px] bg-[#212121] transition-all group-hover:h-full group-active:bg-[#212121]"></span>
     
          <span class="relative text-sm font-medium text-[#212121] transition-colors group-hover:text-white">
      
          Register
          </span></a>
        <a  id="navbar-login-btn" href="{{URL::to('login')}}" class="group relative inline-block overflow-hidden border border-[#212121] px-8 py-3 focus:outline-none focus:ring" href="/download">
          <span class="absolute inset-x-0 bottom-0 h-[2px] bg-[#212121] transition-all group-hover:h-full group-active:bg-[#212121]"></span>
     
          <span class="relative text-sm font-medium text-[#212121] transition-colors group-hover:text-white">
   
          Login
          </span></a>
    @endauth
          
          
          <a id="navbar" name="user" href="#" class="text-[#212121]"></a>
      </div>
         <div class="block md:hidden">
      <button
        class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          stroke-width="2"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M4 6h16M4 12h16M4 18h16"
          />
        </svg>
      </button>
    </div>
  </div>
</nav>


  @yield('content')


  