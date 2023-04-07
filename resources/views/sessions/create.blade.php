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
    <link href="https://fonts.cdnfonts.com/css/delirium-ncv" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/730a8ae355.js" crossorigin="anonymous"></script>
    <script>document.documentElement.classList.add('js')</script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="./app.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Login to user account</title>
</head>


<body >

    <nav
    class="fixed w-full mx-auto top-0 z-50 bg-white transition duration-300 transform --translate-x-full items-center flex justify-center shadow-lg ">
    
    <div class="md:container flex items-center justify-between bg-white p-4 font-bold gap-2">
        <div class="flex items-center gap-8">
            <a href="/">
                <img src="../../img/ph.png" alt="">
            </a>
            <div class="hidden xl:flex gap-6 mt-2 text-sm  ">
                 {{-- Navbar dropdowns all --}}
                 <div x-data="{ isActive: false }" class="relative lg:block hidden">
                    
                    <button x-on:click="isActive = !isActive"
                    class="gap-2 relative font-medium text-black before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-left before:scale-x-0 before:bg-[#03a9f4] before:transition hover:before:scale-100"
                    href="#How">
               All places
               <i x-bind:class="{'fa-solid fa-chevron-down': !isActive, 'fa-solid fa-chevron-up': isActive}"
                       class="text-black text-xs"></i>
               </button>
            
    
                    <div class="absolute left-0 z-10 mt-5 divide-y divide-gray-100 shadow-lg "
                        role="menu" x-cloak x-transition x-show="isActive" x-on:click.away="isActive = false"
                        x-on:keydown.escape.window="isActive = false">
    
                        <ul tabindex="0"
                            class="dropdown-content menu p-2 shadow bg-white mt-3  max-w-96 text-black font-sans ">
                            <div class="p-2 items-center justify-center ">
                                <h1 class="text-lg">Wonders Gallery all images</h1>
                                <h2 class="text-sm text-gray-500 font-thin">Select Categories</h2>
                            </div>
                            <div class="border border-[#9e9e9e] 1px w-full "></div>
                            <div class="flex p-2 gap-4 justify-center mt-2 ">
    
                                <a href="{{ route('uploads.category', 'Beach') }}"class="bg-[#03a9f4] text-white font-thin hover:bg-black p-4 transition duration:300 w-36 text-center">Beach</a>
                                <a href="{{ route('uploads.category', 'Cave') }}" class="bg-[#03a9f4] text-white font-thin hover:bg-black p-4 transition duration:300 w-36 text-center">Cave</a>
                                <a href="{{ route('uploads.category', 'Mountain') }}" class="bg-[#03a9f4] text-white font-thin hover:bg-black p-4 transition duration:300 w-36 text-center">Mountain</a>
                                <a href="{{ route('uploads.category', 'Forest') }}" class="bg-[#03a9f4] text-white font-thin hover:bg-black p-4 transition duration:300 w-36 text-center">Forest</a>
                                <a href="{{ route('uploads.category', 'Cities') }}" class="bg-[#03a9f4] text-white font-thin hover:bg-black p-4 transition duration:300 w-36 text-center">Cities</a>
                           
                            </div>
                            <div class="flex p-2 justify-left mt-2 text-[#03a9f4] font-thin">
                                <a href="/gallery">See all images<i class="fa-sharp  fa-solid fa-angle-right text-[#03a9f4] text-xs  ml-1" ></i></a>
                            </div>
                        </ul>
    
                    </div>
                </div>
                {{-- Navbar dropdowns --}}
                <a class="relative font-medium text-black before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-left before:scale-x-0 before:bg-[#03a9f4] before:transition hover:before:scale-100"
                href="/">Home</a>
    
                <a class="relative font-medium text-black before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-left before:scale-x-0 before:bg-[#03a9f4] before:transition hover:before:scale-100"
                href="/">Blog post</a>
    
                {{-- Navbar dropdowns about --}}
                <div x-data="{ isActive: false }" class="relative lg:block hidden">
                    
                    <button x-on:click="isActive = !isActive"
                    class="gap-2 relative font-medium text-black before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-left before:scale-x-0 before:bg-[#03a9f4] before:transition hover:before:scale-100"
                    href="#How">
               About us
               <i x-bind:class="{'fa-solid fa-chevron-down': !isActive, 'fa-solid fa-chevron-up': isActive}"
                       class="text-black text-xs"></i>
               </button>
            
    
                    <div class="absolute left-0 z-10 mt-5 divide-y divide-gray-100 shadow-lg "
                        role="menu" x-cloak x-transition x-show="isActive" x-on:click.away="isActive = false"
                        x-on:keydown.escape.window="isActive = false">
    
                        <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-white mt-3 max-w-86 text-black font-sans">
                            <div class="p-2 items-center justify-center">
                                <h1 class="text-lg">About Wonders Gallery</h1>
                                <h2 class="text-sm text-gray-500 font-thin">Select Categories</h2>
                            </div>
                            <div class="border border-[#9e9e9e] 1px w-full"></div>
                            <div class="flex p-2 gap-4 justify-center mt-2">
                                <a href=""class="bg-[#03a9f4] text-white font-thin hover:bg-black p-4 transition duration:300 w-36 text-center">About us</a>
                                <a href="" class="bg-[#03a9f4] text-white font-thin hover:bg-black p-4 transition duration:300 w-36 text-center">Contact us</a>
                                <a href="" class="bg-[#03a9f4] text-white font-thin hover:bg-black p-4 transition duration:300 w-36 text-center">How it works</a>
                            </div>
                        </ul>
                        
    
                    </div>
                </div>
                {{-- Navbar dropdowns --}}
               
               
            </div>
        </div>
    
    
    
    
        <div class="flex justify-between space-x-2">
    
            <div class="hidden md:flex">
                <form action="{{ url('search') }}" method="GET" role="search">
    
    
                    <div class="relative text-gray-600">
                        <input type="text" placeholder="Search places.."
                            class="bg-white h-6 p-4 text-sm focus:outline-none mt-3 md:w-96 " name="search"
                            value="{{ Request::get('search') }}" required>
                        <button type="submit" class="absolute right-0 top-0 mt-4 mr-4 ">
                            <i class="fa-solid fa-magnifying-glass text-black"></i>
                        </button>
                    </div>
                </form>
            </div>
            @auth
    
    
    
                <div x-data="{ isActive: false }" class="relative lg:block hidden">
                    <div class="mt-2 relative font-medium text-black before:absolute before:-bottom-1 before:h-0.5 before:w-full before:scale-x-0 before:bg-black before:transition hover:before:scale-x-100 cursor-pointer"
                        href="#">
    
    
                        <button x-on:click="isActive = !isActive"
                            class="h-full p-2 text-gray-600 hover:bg-gray-50 hover:text-gray-700">
                            <i class="fa-solid fa-user text-black"></i>
                        </button>
                    </div>
    
                    <div class="absolute right-0 z-10 mt-6 w-56 divide-y divide-gray-100 rounded-md border border-gray-100 bg-white shadow-lg"
                        role="menu" x-cloak x-transition x-show="isActive" x-on:click.away="isActive = false"
                        x-on:keydown.escape.window="isActive = false">
                        <h1 class="p-4 text-center font-bold uppercase">Welcome, {{ auth()->user()->name }}!</h1>
                        <div class="p-2">
                            <strong class="block p-2 text-xs font-medium uppercase text-gray-400">
                                General
                            </strong>
    
                            <a href="{{ URL::to('uploads') }}"
                                class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-[#03a9f4] hover:text-white font-thin"
                                role="menuitem">
                                Go to dashboard
                            </a>
    
    
                            <form method="POST" action="/logout">
                                @csrf
                                <a href=""
                                    class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-[#03a9f4] hover:text-white font-thin">
                                    <button type="submit" href="" role="menuitem">
                                        Log out
                                    </button>
                                </a>
                            </form>
    
                        </div>
    
    
                    </div>
                </div>
            @else
                <div x-data="{ isActive: false }" class="relative lg:block hidden">
    
    
                    <button x-on:click="isActive = !isActive" class="h-full p-2 text-gray-600 mt-1 mx-auto">
                        <span class="sr-only">Acc</span>
                        <i class="fa-regular fa-user text[#212121]"></i></label>
                    </button>
    
                    <div class="absolute right-0 z-10 mt-2  divide-y divide-gray-100 shadow-lg"
                        role="menu" x-cloak x-transition x-show="isActive" x-on:click.away="isActive = false"
                        x-on:keydown.escape.window="isActive = false">
    
                        <ul tabindex="0"
                            class="dropdown-content menu p-2 shadow bg-white mt-3  w-86 text-black font-sans">
                            <div class="p-4 items-center justify-center ">
                                <h1 class="text-lg">Wonders Gallery Accounts</h1>
                                <h2 class="text-sm text-gray-500 font-thin">Create or login account</h2>
                            </div>
                            <div class="border border-[#9e9e9e] 1px w-full "></div>
                            <div class="flex p-2 gap-4 justify-center mt-2 ">
    
                                <a
                                    href="{{ URL::to('login') }}"class="bg-black text-white font-thin hover:bg-[#03a9f4] p-4 transition duration:300 w-36 text-center">Sign
                                    in</a>
                                <a href="{{ URL::to('register') }}"
                                    class="bg-[#03a9f4] text-white font-thin hover:bg-black p-4 transition duration:300 w-36 text-center">
                                    Sign up</a>
                            </div>
                        </ul>
    
                    </div>
                </div>
    
            @endauth
    
    
            <a id="navbar" name="user" href="#" class="text-[#212121]"></a>
        </div>
        <div class="block lg:hidden">
            <button
                class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75 "data-drawer-target="drawer-navigation"
                data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>
    </nav>

<!-- Breadcrumb -->
<div class="bg-gray-50">
<nav class="container flex px-7 mx-auto py-3 text-gray-700 bg-gray-50 dark:bg-gray-800 dark:border-gray-700 md:mt-20 mt-16 justify-left md:justify-end w-full" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3 gap-1">
      <li class="inline-flex items-center">
        <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
            <i class="fa-solid fa-house text-black"></i>
        </a>
      </li>
      <li>
        <div class="flex items-center gap-1">
            <i class="fa-solid fa-angle-right text-black text-xs"></i>
            <a  class="ml-1 text-sm font-medium text-[#03a9f4]  md:ml-2 dark:text-gray-400 dark:hover:text-white">Login to user account</a>
        </div>
      </li>
    </ol>
  </nav>
  
</div>

{{-- Title --}}
<div class="container mx-auto px-7">
    <div class="flex gap-1">
    <h1 class="mt-5 mb-2 text-2xl text-[#03a9f4]">Login to
        </h1>
        <h1 class="mt-5 mb-2 text-2xl text-black">your account
        </h1>
    </div>
    <h1 class="text-xs mb-1 text-gray-500">Login and explore the world</h1>
    <div class="border border-[#9e9e9e] "></div>
    </div>

{{-- Login form section --}}
    <section class="container  px-7 mt-5  flex items-center mx-auto justify-center bg-2b2d42">
        <!-- login container -->
        <div class="container bg-gray-100 mx-auto flex max-w-full p-5 items-center text-black  ">
            <!-- form -->
            <div class="md:w-1/2 md:px-12 mx-auto justify-center">
                <a href="{{URL::to('/')}}">
                    <img class="mx-auto block cursor-pointer" src="../img/wonders.png" alt="">
                </a>
                <h2 class="font-bold text-2xl text-center">Login</h2>
                <p class="mt-4 md:text-xs grid text-center text-[#002D74]">If you are already a member, easily log in</p>
        
                <form action="/login" class="flex flex-col gap-4 mt-8" method="POST" id="loginForm">
                    @csrf
                    <input class="p-2 px-7 rounded-xl border border-blue-400 w-full" id="username" type="email" name="email" placeholder="Email" value="{{old('email')}}" required>
                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                    <div class="relative">
                        <input class="p-2 px-7 rounded-xl border border-blue-400 w-full" id="password" type="password" name="password" placeholder="Password" required>
                        <svg id="togglePassword" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="gray" class="cursor-pointer bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg>
                    </div>
                    <button type="submit" name="submit" id="submit" class="bg-black rounded-md text-white py-2 hover:scale-105 duration-300">Login</button>
                    @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
                </form>

                <div class="mt-5 text-xs border-b border-[#002D74] py-4 text-[#002D74] ">
                   
                </div>

                <div class="mt-3 text-xs flex justify-between items-center text-[#002D74] ">
                    <p>Don't have an account?</p>
                    <button  class="py-2 px-5 bg-white border rounded-xl hover:scale-110 duration-300 "><a href="{{URL::to('register')}}">Register</a> </button>
                </div>
            </div>

            <!-- image -->
            <div class="md:block hidden w-1/2 ">
                <img class="rounded-2xl " src="../img/women.jpg ">
            </div>
        </div>
    </section>

{{-- Footer --}}
    <footer aria-label="Site Footer" class="bg-white lg:grid lg:grid-cols-5 mt-10">
        <div class="relative block h-32 lg:col-span-2 lg:h-full">
            <img src="../img/shout.jpg" alt="" class="absolute inset-0 object-cover w-full h-full" />
        </div>

        <div class="px-4 py-16 sm:px-6 lg:col-span-3 lg:px-8">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2">
                <div>
                    <p>
                        <span class="text-xs tracking-wide text-gray-500 uppercase">
                            Call us
                        </span>

                        <a href="#"
                            class="block text-2xl font-medium text-gray-900 hover:opacity-75 sm:text-3xl">
                            09101826029
                        </a>
                    </p>

                    <ul class="mt-8 space-y-1 text-sm text-gray-700">
                        <li>Here's our social medias</li>
                        <li>Connect with us</li>
                    </ul>

                    <ul class="flex gap-6 mt-8">
                        <li>
                            <a href="/" rel="noreferrer" target="_blank"
                                class="text-gray-700 transition hover:opacity-75">
                                <span class="sr-only">Facebook</span>

                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="/" rel="noreferrer" target="_blank"
                                class="text-gray-700 transition hover:opacity-75">
                                <span class="sr-only">Instagram</span>

                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="/" rel="noreferrer" target="_blank"
                                class="text-gray-700 transition hover:opacity-75">
                                <span class="sr-only">Twitter</span>

                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="/" rel="noreferrer" target="_blank"
                                class="text-gray-700 transition hover:opacity-75">
                                <span class="sr-only">GitHub</span>

                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>

                        <li>
                            <a href="/" rel="noreferrer" target="_blank"
                                class="text-gray-700 transition hover:opacity-75">
                                <span class="sr-only">Dribbble</span>

                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div class="hidden md:grid grid-cols-1 gap-4">
                        <p class="font-medium text-gray-900">Features</p>

                        <nav aria-label="Footer Navigation - Services" class="mt-6">
                            <ul class="space-y-4 text-sm">
                                <li>
                                    <a href="#" class="text-gray-700 transition hover:opacity-75">
                                        Hd images
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="text-gray-700 transition hover:opacity-75">
                                        Detailed Places
                                    </a>
                                </li>


                            </ul>
                        </nav>
                    </div>

                    <div class="hidden md:grid grid-cols-1 gap-4">
                        <p class="font-medium text-gray-900">Company</p>

                        <nav aria-label="Footer Navigation - Company" class="mt-6">
                            <ul class="space-y-4 text-sm">
                                <li>
                                    <a href="#About" class="text-gray-700 transition hover:opacity-75">
                                        About
                                    </a>
                                </li>

                                <li>
                                    <a href="#how" class="text-gray-700 transition hover:opacity-75">
                                        Services
                                    </a>
                                </li>

                                <li>
                                    <a href="#Gallery" class="text-gray-700 transition hover:opacity-75">
                                        Gallery
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="pt-12 mt-12 border-t border-gray-100">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <nav aria-label="Footer Navigation - Support">
                        <ul class="flex flex-wrap gap-4 text-xs">
                            <li>
                                <a href="#" class="text-gray-500 transition hover:opacity-75">
                                    Terms & Conditions
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-gray-500 transition hover:opacity-75">
                                    Privacy Policy
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-gray-500 transition hover:opacity-75">
                                    Cookies
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <p class="mt-8 text-xs text-gray-500 sm:mt-0">
                        &copy; 2022. WondersPh. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="../js/pass.js"></script>
</body>

</html>