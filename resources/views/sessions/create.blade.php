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
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/730a8ae355.js" crossorigin="anonymous"></script>
    <script>
        document.documentElement.classList.add('js')
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="./app.css" rel="stylesheet">
    <title>Wonders Gallery/Login form</title>
</head>


<body >

    <nav
    class="fixed w-full mx-auto top-0 z-50 bg-white transition duration-300 transform --translate-x-full items-center flex justify-center shadow-lg ">

    <div class="md:container flex items-center justify-between bg-white p-4 font-bold gap-2">
        <div class="flex items-center gap-8">
            <a href="/">
                <img src="../img/ph.png" alt="">
            </a>
            <div class="hidden xl:flex gap-6 mt-2 text-sm ">
                <a class="relative font-medium text-black before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-left before:scale-x-0 before:bg-[#03a9f4] before:transition hover:before:scale-100"
                    href="#About">About</a>
                <a class="relative font-medium text-black before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-left before:scale-x-0 before:bg-[#03a9f4] before:transition hover:before:scale-100"
                    href="#How">How it works</a>
                <a class="relative font-medium text-black before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-left before:scale-x-0 before:bg-[#03a9f4] before:transition hover:before:scale-100"
                    href="#Gallery">Gallery</a>
                <a class="relative font-medium text-black before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-left before:scale-x-0 before:bg-[#03a9f4] before:transition hover:before:scale-100"
                    href="#Services">Contact us</a>
            </div>
        </div>



        <div class="flex justify-between space-x-2">

            <div class="hidden md:flex">
                <form action="{{ url('search') }}" method="GET" role="search">


                    <div class="relative text-gray-600">
                        <input type="text" placeholder="Search places.."
                            class="bg-white h-6 p-4 text-sm focus:outline-none mt-3 w-96 " name="search"
                            value="{{ Request::get('search') }}" required>
                        <button type="submit" class="absolute right-0 top-0 mt-5 mr-4 i">
                            <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                x="0px" y="0px" viewBox="0 0 56.966 56.966"
                                style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px"
                                height="512px">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            @auth



                <div x-data="{ isActive: false }" class="relative lg:block hidden">
                    <div class="mt-2 relative font-medium text-black before:absolute before:-bottom-1 before:h-0.5 before:w-full before:scale-x-0 before:bg-black before:transition hover:before:scale-x-100 cursor-pointer"
                        href="#">
                        <span class="p-4 font-bold uppercase">Welcome, {{ auth()->user()->name }}!</span>

                        <button x-on:click="isActive = !isActive"
                            class="h-full p-2 text-gray-600 hover:bg-gray-50 hover:text-gray-700">
                            <span class="sr-only">Menu</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    <div class="absolute right-0 z-10 mt-7 w-56 divide-y divide-gray-100 rounded-md border border-gray-100 bg-white shadow-lg"
                        role="menu" x-cloak x-transition x-show="isActive" x-on:click.away="isActive = false"
                        x-on:keydown.escape.window="isActive = false">
                        <div class="p-2">
                            <strong class="block p-2 text-xs font-medium uppercase text-gray-400">
                                General
                            </strong>

                            <a href="{{ URL::to('uploads') }}"
                                class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                                role="menuitem">
                                Go to dashboard
                            </a>


                            <form method="POST" action="/logout">
                                @csrf

                                <button type="submit" href=""
                                    class="block rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700"
                                    role="menuitem">
                                    Log out
                                </button>

                            </form>

                        </div>


                    </div>
                </div>
            @else
            

            <div x-data="{ isActive: false }" class="relative lg:block hidden">
               

                    <button x-on:click="isActive = !isActive"
                        class="h-full p-2 text-gray-600 mt-1">
                        <span class="sr-only">Acc</span>
                        <i class="fa-regular fa-user text[#212121]"></i></label>
                    </button>
               
                <div class="absolute right-0 z-10 mt-2  divide-y divide-gray-100 rounded-md shadow-lg"
                    role="menu" x-cloak x-transition x-show="isActive" x-on:click.away="isActive = false"
                    x-on:keydown.escape.window="isActive = false">
                 
                    <ul tabindex="0"
                    class="dropdown-content menu p-2 shadow bg-white mt-3 rounded w-86 text-black font-sans">
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
<nav class="flex px-5 py-3 text-gray-700 bg-gray-50 dark:bg-gray-800 dark:border-gray-700 mt-20 justify-end" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
      <li class="inline-flex items-center">
        <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
            <i class="fa-solid fa-house text-black"></i>
        </a>
      </li>
      <li>
        <div class="flex items-center">
          <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          <a  class="ml-1 text-sm font-medium text-gray-700  md:ml-2 dark:text-gray-400 dark:hover:text-white">Login to user account</a>
        </div>
      </li>
    </ol>
  </nav>
  
    <section class="min-h-screen flex items-center mx-auto justify-center bg-2b2d42">
        <!-- login container -->
        <div class="bg-gray-100 flex rounded-2xl shadow-2xl max-w-7xl p-5 items-center text-black  ">
            <!-- form -->
            <div class="md:w-1/2 md:px-12 mx-auto justify-center">
                <a href="{{URL::to('/')}}">
                    <img class="mx-auto block cursor-pointer" src="../img/wonders.png" alt="">
                </a>
                <h2 class="font-bold text-2xl text-center">Login</h2>
                <p class="mt-4 text-xs text-center text-[#002D74]">If you are already a member, easily log in</p>
        
                <form action="/login" class="flex flex-col gap-4 mt-8" method="POST" id="loginForm">
                    @csrf
                    <input class="p-2 px-7 rounded-xl border border-blue-400" id="username" type="email" name="email" placeholder="Email" value="{{old('email')}}" required>
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

</body>
<script src="../js/pass.js"></script>
</html>