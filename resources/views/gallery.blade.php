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
    
    <script>document.documentElement.classList.add('js')</script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="./app.css" rel="stylesheet">
    <title>Travel around the world</title>
</head>


<body>


<nav class="fixed w-full mx-auto top-0 z-50 bg-transparent shadow-md transition duration-300 transform --translate-x-full items-center justify-between">

  <div class="flex items-center justify-between bg-white shadow-lg shadow-black-500/100 p-4 font-bold ">
      <div class="">
          <img src="../img/7wonders.png " alt=" ">
      </div>
      <div class="hidden lg:flex space-x-20 ">
          <a class="relative font-medium text-black before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-left before:scale-x-0 before:bg-black before:transition hover:before:scale-100"
          href="#About " >About</a>
          <a class="relative font-medium text-black before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-left before:scale-x-0 before:bg-black before:transition hover:before:scale-100"
    href="#Gallery">Gallery</a>
          <a class="relative font-medium text-black before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-left before:scale-x-0 before:bg-black before:transition hover:before:scale-100"
      href="#Services">Services</a>
      </div>
      <div class="flex justify-between space-x-2">
        
        
        @auth
     
   

<div x-data="{ isActive: false }" class="relative lg:block hidden">
<div
class=" relative font-medium text-black before:absolute before:-bottom-1 before:h-0.5 before:w-full before:scale-x-0 before:bg-black before:transition hover:before:scale-x-100 cursor-pointer"
href="#"
>
<span class="p-4 font-bold uppercase">Welcome, {{ auth()->user()->name }}!</span>

<button
x-on:click="isActive = !isActive"
class="h-full p-2 text-gray-600 hover:bg-gray-50 hover:text-gray-700"
>
<span class="sr-only">Menu</span>
<svg
  xmlns="http://www.w3.org/2000/svg"
  class="h-4 w-4"
  viewBox="0 0 20 20"
  fill="currentColor"
>
  <path
    fill-rule="evenodd"
    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
    clip-rule="evenodd"
  />
</svg>
</button>
</div>

<div
class="absolute right-0 z-10 mt-2 w-56 divide-y divide-gray-100 rounded-md border border-gray-100 bg-white shadow-lg"
role="menu"
x-cloak
x-transition
x-show="isActive"
x-on:click.away="isActive = false"
x-on:keydown.escape.window="isActive = false"
>
<div class="p-2">
<strong class="block p-2 text-xs font-medium uppercase text-gray-400">
  General
</strong>

<a
  href="{{URL::to('uploads')}}"
  class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
  role="menuitem"
>
  Go to dashboard
</a>


<form method="POST" action="/logout" >
@csrf

<button type="submit"
href=""
class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
role="menuitem"
>
Log out
</button>

</form>

</div>


</div>
</div>


    @else
        
        <a  href="/register" class="hidden md:flex lg:flex group relative inline-block overflow-hidden border border-[#212121] px-8 py-3 focus:outline-none focus:ring" href="/download">
          <span class="absolute inset-x-0 bottom-0 h-[2px] bg-[#212121] transition-all group-hover:h-full group-active:bg-[#212121]"></span>
     
          <span class="relative text-sm font-medium text-[#212121] transition-colors group-hover:text-white">
      
          Register
          </span></a>
        <a  id="navbar-login-btn" href="{{URL::to('login')}}" class="hidden md:flex lg:flex group relative inline-block overflow-hidden border border-[#212121] px-8 py-3 focus:outline-none focus:ring" href="/download">
          <span class="absolute inset-x-0 bottom-0 h-[2px] bg-[#212121] transition-all group-hover:h-full group-active:bg-[#212121]"></span>
     
          <span class="relative text-sm font-medium text-[#212121] transition-colors group-hover:text-white">
   
          Login
          </span></a>
    @endauth
          
          
          <a id="navbar" name="user" href="#" class="text-[#212121]"></a>
      </div>
         <div class="block lg:hidden">
      <button
        class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75 "data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation"
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






    

<section>
 


<div class="flex items-center justify-center py-4 md:py-8 flex-wrap mt-56">
  <div role="main" class="flex flex-col items-center justify-center">
    <h1 class="text-4xl font-semibold leading-9 text-center text-gray-800 dark:text-gray-50">This Week Gallery</h1>
    <p class="text-base leading-normal text-center text-gray-600 dark:text-white mt-4 lg:w-1/2 md:w-10/12 w-11/12">If you're looking for random paragraphs, you've come to the right place. When a random word or a random sentence isn't quite enough</p>
  </div>
</div>

<div class="grid grid-cols-2 gap-4 p-4 md:grid-cols-3 2xl:mx-auto 2xl:container lg:px-20 lg:py-16 md:py-12 md:px-6 py-9 px-4 w-96 sm:w-auto">

  @foreach ($display as $item)
  <div class="grid-container">
  <div class="grid shadow-2xl">
 
<a href="#" class="group relative grid bg-black rounded-2xl ">
    <img
      alt="Developer"
      src=" {{$item->image}}"
      class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50 rounded-2xl "
    />
  
    <div class="relative p-4 sm:p-6 lg:p-8">
      <p class="text-sm font-medium uppercase tracking-widest text-pink-500">
      Albums
      </p>
  
      <p class="text-xl font-bold text-white sm:text-2xl"> {{$item->title}}</p>
  
      <div class="mt-32 sm:mt-48 lg:mt-64">
        <div
          class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
        >
          <p class="text-sm text-white">
    {{$item->about}}
          </p>
        </div>
      </div>
    </div>
  </a>
  
</div>
      
  </div>
  @endforeach


  </div>
  



                
               
            
           
            </section>
            
        </body>
      
