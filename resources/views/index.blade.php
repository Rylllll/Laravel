<!DOCTYPE html>

<html lang="en" class="scroll-smooth">

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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link href="./app.css" rel="stylesheet">
    
    <title>Wonders Gallery</title>
    @vite('resources/css/app.css')
</head>







<body class="font-sans">

    <button x-data="topBtn" @click="scrolltoTop" id="topButton"
        class="fixed z-20 hidden p-3 bg-blue-400 rounded-full shadow-md bottom-10 right-10 animate-bounce transform-gpu translate-z-0 hover:translate-z-1">
        <i class="fa-solid fa-chevron-up w-6 h-5" style="color: #000000; transform: translateZ(0.1rem);"></i>
    </button>



    <nav
        class="fixed w-full mx-auto top-0 z-50 bg-white transition duration-300 transform --translate-x-full items-center flex justify-center">

        <div class="md:container flex items-center justify-between bg-white p-4 font-bold gap-2">
            <div class="flex items-center gap-8">
                <a href="/">
                    <img src="../img/ph.png" alt="">
                </a>
                <div class="hidden xl:flex gap-6 mt-2 text-sm  ">
                    {{-- Navbar dropdowns all --}}
                    <div x-data="{ isActive: false }" class="relative lg:block hidden">

                        <button x-on:click="isActive = !isActive"
                            class="gap-2 relative font-medium text-[#212121] before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-left before:scale-x-0 before:bg-[#03a9f4] before:transition hover:before:scale-100"
                            href="#How">
                            All places
                            <i x-bind:class="{ 'fa-solid fa-chevron-down': !isActive, 'fa-solid fa-chevron-up': isActive }"
                                class="text-[#212121] text-xs"></i>
                        </button>


                        <div class="absolute left-0 z-10 mt-5 divide-y divide-gray-100 shadow-lg " role="menu"
                            x-cloak x-transition x-show="isActive" x-on:click.away="isActive = false"
                            x-on:keydown.escape.window="isActive = false">

                            <ul tabindex="0"
                                class="dropdown-content menu p-2 shadow bg-white mt-3  max-w-96 text-[#212121] font-sans ">
                                <div class="p-2 items-center justify-center ">
                                    <h1 class="text-lg">Wonders Gallery all images</h1>
                                    <h2 class="text-sm text-gray-500 font-thin">Select Categories</h2>
                                </div>
                                <div class="border border-[#9e9e9e] 1px w-full "></div>
                                <div class="flex p-2 gap-4 justify-center mt-2 ">

                                    <a
                                        href="{{ route('uploads.category', 'Beach') }}"class="bg-[#03a9f4] text-white font-thin hover:bg-[#212121] p-4 transition duration:300 w-36 text-center">Beach</a>
                                    <a href="{{ route('uploads.category', 'Cave') }}"
                                        class="bg-[#03a9f4] text-white font-thin hover:bg-[#212121] p-4 transition duration:300 w-36 text-center">Cave</a>
                                    <a href="{{ route('uploads.category', 'Mountain') }}"
                                        class="bg-[#03a9f4] text-white font-thin hover:bg-[#212121] p-4 transition duration:300 w-36 text-center">Mountain</a>
                                    <a href="{{ route('uploads.category', 'Forest') }}"
                                        class="bg-[#03a9f4] text-white font-thin hover:bg-[#212121] p-4 transition duration:300 w-36 text-center">Forest</a>
                                    <a href="{{ route('uploads.category', 'Cities') }}"
                                        class="bg-[#03a9f4] text-white font-thin hover:bg-[#212121] p-4 transition duration:300 w-36 text-center">Cities</a>

                                </div>
                                <div class="flex p-2 justify-left mt-2 text-[#03a9f4] font-thin">
                                    <a href="/gallery">See all images<i
                                            class="fa-sharp  fa-solid fa-angle-right text-[#03a9f4] text-xs  ml-1"></i></a>
                                </div>
                            </ul>

                        </div>
                    </div>
                    {{-- Navbar dropdowns --}}

                    <a class="relative font-medium text-[#212121] before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-left before:scale-x-0 before:bg-[#03a9f4] before:transition hover:before:scale-100"
                        href="/">Home</a>

                    {{-- Navbar dropdowns about --}}
                    <div x-data="{ isActive: false }" class="relative lg:block hidden">

                        <button x-on:click="isActive = !isActive"
                            class="gap-2 relative font-medium text-[#212121] before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-left before:scale-x-0 before:bg-[#03a9f4] before:transition hover:before:scale-100"
                            href="#How">
                            About us
                            <i x-bind:class="{ 'fa-solid fa-chevron-down': !isActive, 'fa-solid fa-chevron-up': isActive }"
                                class="text-[#212121] text-xs"></i>
                        </button>


                        <div class="absolute left-0 z-10 mt-5 divide-y divide-gray-100 shadow-lg " role="menu"
                            x-cloak x-transition x-show="isActive" x-on:click.away="isActive = false"
                            x-on:keydown.escape.window="isActive = false">

                            <ul tabindex="0"
                                class="dropdown-content menu p-2 shadow bg-white mt-3 max-w-86 text-[#212121] font-sans">
                                <div class="p-2 items-center justify-center">
                                    <h1 class="text-lg">About Wonders Gallery</h1>
                                    <h2 class="text-sm text-gray-500 font-thin">Select Categories</h2>
                                </div>
                                <div class="border border-[#9e9e9e] 1px w-full"></div>
                                <div class="flex p-2 gap-4 justify-center mt-2">
                                    <a
                                        href="/About-us"class="bg-[#03a9f4] text-white font-thin hover:bg-[#212121] p-4 transition duration:300 w-36 text-center">About
                                        us</a>
                                    <a href="/Contact-us"
                                        class="bg-[#03a9f4] text-white font-thin hover:bg-[#212121] p-4 transition duration:300 w-36 text-center">Contact
                                        us</a>
                                    <a href="/How-it-works"
                                        class="bg-[#03a9f4] text-white font-thin hover:bg-[#212121] p-4 transition duration:300 w-36 text-center">How
                                        it works</a>
                                </div>
                            </ul>


                        </div>
                    </div>
                    {{-- Navbar dropdowns --}}

                    {{-- Navbar dropdowns about --}}
                    <div x-data="{ isActive: false }" class="relative lg:block hidden">

                        <button x-on:click="isActive = !isActive"
                            class="gap-2 relative font-medium text-[#212121] before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-left before:scale-x-0 before:bg-[#03a9f4] before:transition hover:before:scale-100"
                            href="#How">
                            Blog post
                            <i x-bind:class="{ 'fa-solid fa-chevron-down': !isActive, 'fa-solid fa-chevron-up': isActive }"
                                class="text-[#212121] text-xs"></i>
                        </button>


                        <div class="absolute left-0 z-10 mt-5 divide-y divide-gray-100 shadow-lg " role="menu"
                            x-cloak x-transition x-show="isActive" x-on:click.away="isActive = false"
                            x-on:keydown.escape.window="isActive = false">

                            <ul tabindex="0"
                                class="dropdown-content menu p-2 shadow bg-white mt-3 max-w-86 text-[#212121] font-sans">
                                <div class="p-2 items-center justify-center">
                                    <h1 class="text-lg">Blog post Wonders Gallery</h1>
                                    <h2 class="text-sm text-gray-500 font-thin">Select Categories</h2>
                                </div>
                                <div class="border border-[#9e9e9e] 1px w-96"></div>
                                <div class="flex p-2 gap-4 justify-center mt-2">
                                    <h1 class="p-4">Coming soon!</h1>
                                </div>
                            </ul>


                        </div>
                    </div>

                    {{-- Navbar dropdowns --}}


                </div>
            </div>




            <div class="flex justify-between space-x-2">

                <div class="hidden md:flex ">
                    <form action="{{ url('search') }}" method="GET" role="search">


                        <div class="relative text-gray-600">
                            <input type="search" placeholder="Search places..."
                            id="search_places"
                                class="bg-white h-6 p-4 text-sm focus:outline-none mt-3 md:w-96 w-40 font-thin "
                                name="search" value="{{ Request::get('search') }}" required>
                            <button type="submit" class="absolute right-0 top-0 mt-4 mr-4 ">
                                <i class="fa-solid fa-magnifying-glass text-[#212121]"></i>
                            </button>

                            
                        </div>
                    </form>
                    

                </div>
                @auth



                    <div x-data="{ isActive: false }" class="relative lg:block hidden">
                        <div class="mt-2 relative font-medium text-[#212121] before:absolute before:-bottom-1 hover:before:scale-x-100 cursor-pointer"
                            href="#">


                            <button x-on:click="isActive = !isActive" class="h-full p-2 text-gray-600  ">
                                <img src="../img/user.png" class="w-7 h-7 rounded-full" alt="">
                         
                            </button>
                        </div>

                        <div class="absolute right-0 z-10 mt-6 w-56 divide-y divide-gray-100  border border-gray-100 bg-white shadow-lg"
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


                        <button x-on:click="isActive = !isActive" class="h-full px-2 mt-1 text-gray-600 justify-center mx-auto">
                            <span class="sr-only">Acc</span>
                            <i class="fa-regular fa-user text[#212121]"></i></label>
                        </button>

                        <div class="absolute right-0 z-10 mt-2  divide-y divide-gray-100 shadow-lg" role="menu" x-cloak
                            x-transition x-show="isActive" x-on:click.away="isActive = false"
                            x-on:keydown.escape.window="isActive = false">

                            <ul tabindex="0"
                                class="dropdown-content menu p-2 shadow bg-white mt-3  w-86 text-[#212121] font-sans">
                                <div class="p-4 items-center justify-center ">
                                    <h1 class="text-lg">Wonders Gallery Accounts</h1>
                                    <h2 class="text-sm text-gray-500 font-thin">Create or login account</h2>
                                </div>
                                <div class="border border-[#9e9e9e] 1px w-full "></div>
                                <div class="flex p-2 gap-4 justify-center mt-2 ">

                                    <a
                                        href="{{ URL::to('login') }}"class="bg-[#212121] text-white font-thin hover:bg-[#03a9f4] p-4 transition duration:300 w-36 text-center">Sign
                                        in</a>
                                    <a href="{{ URL::to('register') }}"
                                        class="bg-[#03a9f4] text-white font-thin hover:bg-[#212121] p-4 transition duration:300 w-36 text-center">
                                        Sign up</a>
                                </div>
                            </ul>

                        </div>
                    </div>

                @endauth


                <a id="navbar" name="user" href="#" class="text-[#212121]"></a>
            </div>
            <div class="block mt-3 xl:hidden">
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




    <section class="mt-36 md:container justify-center mx-auto ">
        <div class="mx-auto md:container py-8 sm:py-12 sm:px-6 lg:py-16 rounded-lg ">

            <div class="">
                <div class="">
                    <div>
                        <h2 class="text-3xl font-bold md:text-6xl sm:text-4xl text-[#03a9f4] mb-2 slide-right ">READY
                            TO EXPLORE THE BEAUTY OF</h2>

                        <div class="lg:flex  grid">
                            <h2 class="text-3xl font-bold md:text-6xl sm:text-4xl mb-2 text-black slide-right w-3/4">
                                WONDERFUL WORLD</h2>
                            <p class="text-gray-600 text-black slide-right justify-left mt-2">

                                Each wonder tells a unique story of its time, culture, and the people who built it. They
                                are a reflection of human ambition and the desire to leave a lasting legacy.
                            </p>

                        </div>




                    </div>

                    <div class="w-full h-auto relative mt-10">
                        <div class="relative">

                            <div id="default-carousel" class="relative w-full" data-carousel="slide">

                                <div class="relative h-56 overflow-hidden md:h-96 slide-down">

                                    @foreach ($takes as $item)
                                        <a href="{{ route('display.show', ['id' => $item->id]) }}">
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ $item->image }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                                    alt="...">
                                            </div>
                                        </a>
                                    @endforeach

                                </div>
                                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                                    <button type="button" class="w-3 h-3 " aria-current="true" aria-label="Slide 1"
                                        data-carousel-slide-to="0"></button>
                                    <button type="button" class="w-3 h-3 " aria-current="false"
                                        aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                    <button type="button" class="w-3 h-3 " aria-current="false"
                                        aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                    <button type="button" class="w-3 h-3 " aria-current="false"
                                        aria-label="Slide 4" data-carousel-slide-to="3"></button>
                                    <button type="button" class="w-3 h-3 " aria-current="false"
                                        aria-label="Slide 5" data-carousel-slide-to="4"></button>
                                    <button type="button" class="w-3 h-3 " aria-current="false"
                                        aria-label="Slide 5" data-carousel-slide-to="5"></button>
                                </div>

                            </div>

                            <div
                                class="hidden md:block absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 slide-right w-full">
                               
                                <form action="{{ url('search') }}" method="GET" role="search">   
                                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                    <div class="relative w-1/2 container justify-center mx-auto items-center">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <i
                                            class="fa-solid fa-magnifying-glass text-[#212121]"></i>
                                        </div>
                                        <input type="search" name="search" id="search_places" value="{{ Request::get('search') }}" id="default-search" class="block w-full p-6 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Places..." required>
                                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-[#03a9f4] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-4 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                                    </div>
                                </form>
                                
                            </div>
                            @foreach ($taked as $item)
                                <div
                                    class="hidden absolute mt-24 top-64 left-100 right-0 mr-4 z-20 lg:flex  flex-col items-center justify-center slide-right ">
                                    <a href="{{ route('display.show', ['id' => $item->id]) }}"
                                        class="flex flex-col items-center bg-white shadow-xl md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                        <div class="flex flex-col justify-between p-4 leading-normal">
                                            <h5
                                                class="mb-2 text-2xl font-bold tracking-tight text-black dark:text-white slide-right ">
                                                {{ $item->title }}</h5>
                                            <p
                                                class="mb-3 font-normal text-black dark:text-gray-400 text-sm slide-right ">
                                                View the latest place!</p>
                                        </div>
                                        <img class="object-cover w-full h-full md:h-full md:w-48 md:rounded-none slide-right "
                                            src="{{ $item->image }}" alt="{{ $item->title }}">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <p class="text-gray-600 text-black slide-right justify-left mt-4 lg:text-lg text-sm">
                        The wonders of the world are a testament to human creativity, ingenuity, and perseverance, From
                        the ancient</p>
                    <p class="text-gray-600 text-black slide-right justify-left  lg:text-lg text-sm">
                        wonders like the Great Pyramid of Giza and the Hanging Gardens of Babylon,to the modern marvels
                    </p>
                    <p class="text-gray-600 text-black slide-right justify-left lg:text-lg text-sm">
                        like the Panama Canal and the Burj Khalifa, these structures have captivated and inspired people
                        for centuries.
                    </p>


                </div>

            </div>
        </div>


    </section>


{{--Sponsors--}}

    <section class="md:container items-center w-full mx-auto px-7 mt-24 mb-24 ">
        <div class="flex justify-between s">

            <img src="../img/sponsors1.png" class="md:w-28 w-16 sm:w-12 h-auto filter grayscale-100 slide-down" alt="">
            <img src="../img/sponsors2.png" class="md:w-28 w-16 sm:w-12 h-auto filter grayscale slide-down" alt="">
            <img src="../img/sponsors3.png" class="md:w-28 w-16 sm:w-12 h-auto filter grayscale slide-down" alt="">
            <img src="../img/sponsors4.png" class="md:w-28 w-16 sm:w-12 h-auto filter grayscale slide-down" alt="">
            <img src="../img/sponsors5.png" class="md:w-28 w-16 sm:w-12 h-auto filter grayscale slide-down" alt="">

        </div>


        </div>
    </section>

 



    {{-- Title1 --}}
    <div class="md:container mx-auto px-7 latest">
        <div class="flex gap-1">
            <h1 class="mt-5 mb-2 text-2xl text-[#03a9f4] font-[#212121]">Wonders
            </h1>
            <h1 class="mt-5 mb-2 text-2xl text-[#212121] font-[#212121]">Latest Uploads
            </h1>
        </div>
        <p class="mb-2 text-xs text-gray-500">
            Gallery of latest uploads</p>

    </div>



    <section class="md:container relative  items-center w-full mx-auto justify-center mb-10">

        <div class="grid w-full grid-cols-1 mx-auto lg:grid-cols-3 latest_up">
            @foreach ($takes as $item)
                <div class="px-7 gap-2">
                    <a href="{{ route('display.show', ['id' => $item->id]) }}"><img
                            class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 latest_up"
                            src="{{ $item->image }}" alt="{{ $item->title }}"></a>
                    <div class="justify-between w-full">
                        <h1
                            class="mb-2 md:text-sm text-sm font-semibold leading-none tracking-tighter text-neutral-600 latest_up"">
                            {{ $item->title }}</h1>
                        <p class="text-xs mb-3 latest_up"">
                            {{ substr($item->about, 0, 200) }}{{ strlen($item->about) > 250 ? '...' : '' }}</p>
                    </div>

                </div>
            @endforeach

        </div>

    </section>

    {{-- Title2 --}}
    <div class="md:container mx-auto px-7">
        <div class="md:flex justify-between ">
            <div class="grid">
                <div class="flex gap-1">
                    <h1 class="mt-5 mb-2 text-2xl text-[#03a9f4] font-[#212121] slide-right ">Wonders
                    </h1>
                    <h1 class="mt-5 mb-2 text-2xl text-[#212121] font-[#212121] slide-right ">Featured Places
                    </h1>

                </div>
                <p class="mb-2 text-xs text-gray-500 slide-right ">
                    Gallery of weekly images</p>
            </div>

            <div class="justify-end mt-7 mb-2 slide-down">
                <a href="/gallery"><button
                        class="bg-[#03a9f4] text-white px-9 py-3 text-sm hover:bg-white border border-[#03a9f4] hover:text-[#03a9f4] transition duration-300">MORE
                        PLACES</button></a>
            </div>
        </div>



    </div>



    <div class="md:container relative  items-center w-full mx-auto justify-center ">
        <div class="grid w-full grid-cols-1 mx-auto lg:grid-cols-4 slide-right ">
            @foreach ($take as $item)
                <div class="px-7 mb-2">
                    <img class=" object-cover object-center w-full mb-8 lg:h-48 md:h-36 slide-right "
                        src="{{ $item->image }}" alt="{{ $item->title }}">
                    <div class="justify-between w-full">
                        <h1
                            class="mb-8 md:text-xs text-sm font-semibold leading-none tracking-tighter text-neutral-600 slide-right ">
                            {{ $item->title }}</h1>
                    </div>
                    <a class="group relative inline-block overflow-hidden border border-[#03a9f4] px-8 py-3 focus:outline-none focus:ring w-full text-center slide-right "
                        href="{{ route('display.show', ['id' => $item->id]) }}">
                        <span
                            class="absolute inset-x-0 bottom-0 h-[2px] bg-[#03a9f4] transition-all group-hover:h-full group-active:bg-indigo-500"></span>

                        <span
                            class="relative text-sm font-medium text-[#03a9f4] transition-colors group-hover:text-white">
                            Visit
                        </span>
                    </a>
                </div>
            @endforeach

        </div>
    </div>



    <section class="py-16 justify-center mx-auto px-7">
        {{-- Title3 --}}
        <div class="md:container mx-auto px-7">
            <div class="flex gap-1">
                <h1 class="mt-3 mb-2 text-2xl text-[#03a9f4] font-[#212121] slide-down">Explore
                </h1>
                <h1 class="mt-3 mb-2 text-2xl text-[#212121] font-[#212121] slide-down">Our Categories
                </h1>
            </div>
            <p class="mb-2 text-xs text-gray-500 slide-down">
                Select in our categories</p>

        </div>


        <div class="md:container grid md:flex gap-4 px-7 mx-auto justify-center w-full mt-2">

            <div class="relative slide-down">
                <a class="group relative inline-block overflow-hidden border border-none focus:outline-none focus:ring font-[#212121] text-center"
                    href="{{ route('uploads.category', 'Beach') }}">
                    <img class="h-auto max-w-full " src="../img/cov1.png" alt="">
                    <span
                        class="absolute inset-x-0 bottom-0 h-[2px] bg-[#03a9f4] transition-all group-hover:h-1/6 group-active:bg-indigo-500"></span>
                    <span
                        class="absolute inset-0 flex items-end lg:py-8  py-10 md:py-5 justify-center text-sm font-medium transition-opacity opacity-0 group-hover:opacity-100 text-white">
                        let's go
                        <i class="fa-solid fa-arrow-right w-4 h-4 ml-2 inline-block transform text-white"></i>
                    </span>
                </a>
            </div>


            <div class="relative slide-down">
                <a class="group relative inline-block overflow-hidden border border-none focus:outline-none focus:ring font-[#212121] text-center"
                    href="{{ route('uploads.category', 'Cave') }}">
                    <img class="h-auto max-w-full " src="../img/cov2.png" alt="">
                    <span
                        class="absolute inset-x-0 bottom-0 h-[2px] bg-[#03a9f4] transition-all group-hover:h-1/6 group-active:bg-indigo-500"></span>
                    <span
                        class="absolute inset-0 flex items-end lg:py-8  py-5 md:py-5 justify-center text-sm font-medium transition-opacity opacity-0 group-hover:opacity-100 text-white">
                        let's go
                        <i class="fa-solid fa-arrow-right w-4 h-4 ml-2 inline-block transform text-white"></i>
                    </span>
                </a>
            </div>

            <div class="relative slide-down">
                <a class="group relative inline-block overflow-hidden border border-none focus:outline-none focus:ring font-[#212121] text-center"
                    href="{{ route('uploads.category', 'Mountain') }}">
                    <img class="h-auto max-w-full " src="../img/cov3.png" alt="">
                    <span
                        class="absolute inset-x-0 bottom-0 h-[2px] bg-[#03a9f4] transition-all group-hover:h-1/6 group-active:bg-indigo-500"></span>
                    <span
                        class="absolute inset-0 flex items-end lg:py-8  py-5 md:py-5 justify-center text-sm font-medium transition-opacity opacity-0 group-hover:opacity-100 text-white">
                        let's go
                        <i class="fa-solid fa-arrow-right w-4 h-4 ml-2 inline-block transform text-white"></i>
                    </span>
                </a>
            </div>



        </div>

        <div class="md:container grid md:flex gap-4 px-7 mx-auto justify-center w-full mt-4">

            <div class="relative slide-down">
                <a class="group relative inline-block overflow-hidden border border-none focus:outline-none focus:ring font-[#212121] text-center"
                    href="{{ route('uploads.category', 'Forest') }}">
                    <img class="h-auto max-w-full " src="../img/cov4.png" alt="">
                    <span
                        class="absolute inset-x-0 bottom-0 h-[2px] bg-[#03a9f4] transition-all group-hover:h-1/6 group-active:bg-indigo-500"></span>
                    <span
                        class="absolute inset-0 flex items-end lg:py-8 py-5 md:py-10 justify-center text-sm font-medium transition-opacity opacity-0 group-hover:opacity-100 text-white">
                        let's go
                        <i class="fa-solid fa-arrow-right w-4 h-4 ml-2 inline-block transform text-white"></i>
                    </span>
                </a>
            </div>

            <div class="relative slide-down">
                <a class="group relative inline-block overflow-hidden border border-none focus:outline-none focus:ring font-[#212121] text-center"
                    href="{{ route('uploads.category', 'Cities') }}">
                    <img class="h-auto max-w-full " src="../img/cov5.png" alt="">
                    <span
                        class="absolute inset-x-0 bottom-0 h-[2px] bg-[#03a9f4] transition-all group-hover:h-1/6 group-active:bg-indigo-500"></span>
                    <span
                        class="absolute inset-0 flex items-end lg:py-8 py-5 md:py-10 justify-center text-sm font-medium transition-opacity opacity-0 group-hover:opacity-100 text-white">
                        let's go
                        <i class="fa-solid fa-arrow-right w-4 h-4 ml-2 inline-block transform text-white"></i>
                    </span>
                </a>
            </div>
        </div>


    </section>






    

    <section class="min-h-auto flex items-stretch text-white ">
        <div class="lg:flex w-1/2 hidden bg-cover bg-no-repeat bg-center relative items-center"
            style="background-image: url('../img/cave.jpg')">
            <div class="absolute bg-[#212121] opacity-60 inset-0 z-0"></div>
            <div class="w-full px-24 z-10">
                <h1 class="text-5xl font-bold text-left tracking-wide">Keep it special</h1>
                <p class="text-3xl my-4">Capture your personal memory in unique way, anywhere.</p>
            </div>
        </div>

        <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0 bg-[#212121]">

            <div class="w-full py-6 z-20">
                <h1 class="my-6">

                    <img src="../img/ph1.png" class="w-auto h-50 sm:h-8 inline-flex"alt="">
                </h1>
                <div class="py-6 space-x-2">
                    <p class="text-gray-100">
                        Connect with us
                    </p>
                    <span
                        class="w-10 h-10 items-center justify-center inline-flex rounded-full font-bold text-lg border-2 border-white">f</span>
                    <span
                        class="w-10 h-10 items-center justify-center inline-flex rounded-full font-bold text-lg border-2 border-white">G+</span>
                    <span
                        class="w-10 h-10 items-center justify-center inline-flex rounded-full font-bold text-lg border-2 border-white">in</span>
                </div>

            </div>
        </div>
    </section>

    <footer aria-label="Site Footer" class="bg-white lg:grid lg:grid-cols-5 mt-40">
        <div class="relative block h-32 lg:col-span-2 lg:h-full">
            <img src="../img/shout.jpg" alt="" class="absolute inset-0 object-cover w-full h-full" />
        </div>

        <div class="px-4 py-16 sm:px-7 lg:col-span-3 lg:px-8">
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


    {{-- Sidebar -------------------------------------------------------------------- --}}
    <div id="drawer-navigation"
        class="fixed top-0 mt-20 xl: mt-14 left-0 z-50 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800 "
        tabindex="-1" aria-labelledby="drawer-navigation-label">
        <h5 id="drawer-navigation-label"
            class="text-base font-semibold font-sans text-gray-500 uppercase dark:text-gray-400">Wonders menu</h5>
        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="py-4 overflow-y-auto">
            <ul class="space-y-2 font-medium">

                @auth

                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                            <i class="fa-solid fa-user" style="color: #000000;"></i>
                            <span class="p-4 font-bold uppercase">Welcome, {{ auth()->user()->name }}!</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-example" class="hidden py-2 space-y-2">
                            <li>
                                <a href="{{ URL::to('uploads') }}"
                                    class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white  dark:hover:bg-gray-700 hover:bg-[#212121] hover:text-white">
                                    <i class="fa-solid fa-chart-simple hover:text-white"></i>
                                    <span class="ml-3">Dashboard</span>
                                </a>

                            </li>




                            <form method="POST" action="/logout">
                                @csrf
                                <li>
                                    <button href="#" type="submit"
                                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white  dark:hover:bg-gray-700 hover:bg-[#212121] hover:text-white">
                                        <i class="fa-solid fa-right-from-bracket hover:text-white"></i>
                                        <span class="ml-3">Logout</span>
                                    </button>
                                </li>
                            </form>
                        </ul>
                    </li>
                @else
                    <li>
                        <a href="{{ URL::to('register') }}"
                            class=" flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-[#212121] dark:hover:bg-gray-700 hover:text-white xl:hidden lg:hidden">
                            <i class="fa-solid fa-user-plus hover:text-white"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
                        </a>
                    </li>
                    </span>
                    </li>

                    <li>
                        <a href="{{ URL::to('login') }}"
                            class="flex items-center p-2 text-gray-900 hover:text-white rounded-lg dark:text-white hover:bg-[#212121] dark:hover:bg-gray-700 xl:hidden lg:hidden">
                            <i class="fa-solid fa-right-to-bracket hover:text-white"></i>
                            <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
                        </a>
                    </li>


                @endauth
                <li>
                    <a href="/gallery"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white  dark:hover:bg-gray-700 hover:bg-[#212121] hover:text-white">

                        <i class="fa-solid fa-image hover:text-white"></i>
                        <span class="ml-3">All places</span>
                    </a>
                </li>
                <li>
                    <a href="#How"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white  dark:hover:bg-gray-700 hover:bg-[#212121] hover:text-white">
                        <i class="fa-sharp fa-solid fa-circle-info hover:text-white"></i>
                        <span class="ml-3">About us</span>
                    </a>
                </li>
                <li>
                    <a href="#Gallery"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white  dark:hover:bg-gray-700 hover:bg-[#212121] hover:text-white">
                        <i class="fa-sharp fa-solid fa-address-card hover:text-white"></i>
                        <span class="ml-3">Blog post</span>
                    </a>
                </li>

            </ul>


        </div>
    </div>







    @if (session()->has('success'))
        <aside x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
            class="fixed bottom-4 right-4 z-50 flex items-center justify-center gap-4 rounded-lg bg-[#212121] px-5 py-3 text-white">
            <a href="/new-thing" target="_blank" rel="noreferrer" class="text-sm font-medium hover:opacity-75">
                {{ session('success') }} 👋
            </a>

            <button class="rounded bg-white/20 p-1 hover:bg-white/10">
                <span class="sr-only">Close</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fillRule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clipRule="evenodd" />
                </svg>
            </button>
        </aside>
    @endif

    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://unpkg.com/taos@1.0.2/dist/taos.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="../js/scroll.js"></script>
    <script src="../js/search.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    

</body>



</html>
