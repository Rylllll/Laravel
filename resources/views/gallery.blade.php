
<!DOCTYPE html>

<html data-theme="cupcake" lang="en" class="scroll-smooth">

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
 
  <button x-data="topBtn" @click="scrolltoTop" id="topButton"
  class="fixed z-10 hidden p-3 bg-blue-400 rounded-full shadow-md bottom-10 right-10 animate-bounce">
  <i class="fa-solid fa-chevron-up w-6 h-5" style="color: #000000;"></i>
</button>

<nav class="fixed w-full mx-auto top-0 z-50 bg-white transition duration-300 transform --translate-x-full items-center flex justify-center shadow-lg ">

  <div class="md:container flex items-center justify-between bg-white p-4 font-bold gap-2">
    <div class="flex items-center gap-8">
      <a href="/">
        <img src="../img/ph.png" alt="">
      </a>
      <div class="hidden xl:flex gap-6 mt-2">
        <a class="relative font-medium text-black before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-left before:scale-x-0 before:bg-[#03a9f4] before:transition hover:before:scale-100" href="/">Home</a>
        <a class="relative font-medium text-black before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-left before:scale-x-0 before:bg-[#03a9f4] before:transition hover:before:scale-100" href="#recent">Recent</a>
        <a class="relative font-medium text-black before:absolute before:-bottom-1 before:h-0.5 before:w-full before:origin-left before:scale-x-0 before:bg-[#03a9f4] before:transition hover:before:scale-100" href="#all">Albums</a>
      </div>
    </div>
    
    
     
      <div class="flex justify-between space-x-2">
        
        <div class="hidden md:flex">
          <form action="{{ url('search') }}" method="GET" role="search">
  

            <div class="relative text-gray-600">
              <input type="text" placeholder="Search places.." class="bg-white h-10 p-6 text-sm focus:outline-none" name="search" value="{{Request::get('search')}}">
              <button type="submit" class="absolute right-0 top-0 mt-4 mr-4 i">
                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                  <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                </svg>
              </button>
            </div>
            </form>
          </div>
        @auth
     
   

        <div x-data="{ isActive: false }" class="relative lg:block hidden">
          <div
            class="mt-1 relative font-medium text-black before:absolute before:-bottom-1 before:h-0.5 before:w-full before:scale-x-0 before:bg-black before:transition hover:before:scale-x-100 cursor-pointer"
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
        <a  href="/register" class="hidden lg:flex group relative inline-block overflow-hidden border border-[#212121] px-8 py-3 focus:outline-none focus:ring" href="/download">
    <span class="absolute inset-x-0 bottom-0 h-[2px] bg-[#212121] transition-all group-hover:h-full group-active:bg-[#212121]"></span>

    <span class="relative text-sm font-medium text-[#212121] transition-colors group-hover:text-white">

    Register
    </span></a>
     
        <a  id="navbar-login-btn" href="{{URL::to('login')}}" class="hidden lg:flex  group relative inline-block overflow-hidden border border-[#212121] px-8 py-3 focus:outline-none focus:ring" href="/download">
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



 

<section  class="mt-20 " id="recent">
 
<div class="flex items-center justify-center flex-wrap mt-40 ">
  <div role="main" class="flex flex-col items-center justify-center">
    <h1 class="text-4xl font-semibold leading-9 text-center text-gray-800 dark:text-gray-50">Wonders Gallery</h1>
    <p class="text-base leading-normal text-center text-gray-600 dark:text-white mt-4 lg:w-1/2 md:w-10/12 w-11/12">If you're looking for random paragraphs, you've come to the right place. When a random word or a random sentence isn't quite enough</p>
  </div>
</div>


<div class="md:grid-cols-3 2xl:mx-auto 2xl:container lg:px-20 lg:py-16 md:py-12 md:px-6 py-9 px-4 w-96 sm:w-auto">
  <div class="flex items-center justify-center mt-10 mb-10 md:mt-1 md:mb-1 md:justify-end">
  
  </div>
  <div class="mt-20">
<h1 class="p-4 text-white rounded-full mb-10 sm:w-full md:w-1/4 text-center bg-[#212121] font-bold">Recent Images</h1>
<h2>Recent post</h2>
</div>
</div>

<div class="grid grid-cols-2 gap-4 p-4 md:grid-cols-3 2xl:mx-auto 2xl:container lg:px-20 md:px-6 px-4 w-96 sm:w-auto">
  @foreach ($home as $item)
 
  
    <a href="{{ route('display.show', ['id' => $item->id]) }}" class="group relative block bg-black ">
      <img
        alt="Developer"
        src="{{$item->image}}"
        class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50 "
      />
    
      <div class="relative p-4 sm:p-6 lg:p-8">
        <p class="text-sm font-medium uppercase tracking-widest text-blue-500">
          Gallery
        </p>
    
        <p class="text-xl font-bold text-white sm:text-2xl">{{$item->title}}</p>
    
        <div class="mt-32 sm:mt-48 lg:mt-64">
          <div
            class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
          >
          <p class="mt-1.5 max-w-[45ch] text-xs text-white overflow-hidden" style="max-height: 3em; text-overflow: ellipsis;">
            {{ substr($item->about, 0, 60) }}{{ strlen($item->about) > 250 ? "..." : "" }}
          </p>
          
          </div>
          
        </div>
        
      </div>
    </a>
  
  @endforeach
</div>
</div>
</section>
 
                
     
 
  <section id="all">
   <div class="py-16">
    <div class="md:grid-cols-3 2xl:mx-auto 2xl:container lg:px-20 lg:py-16 md:py-12 md:px-6 py-9 px-4 w-96 sm:w-auto">
    <h1 class="p-4 text-white rounded-full mb-10 sm:w-full md:w-1/4 text-center bg-[#212121] font-bold">All travel spot images</h1>
    <h2>Collections of images from beautiful places around the world</h2>
    
    </div>
   
    <div class="w-full max-w-7xl pb-10 mx-auto gap-6 columns-3 space-y-10 grid md:block md:grid-cols-3 lg:px-20 lg:py-16 md:py-12 md:px-6 py-9 px-4 w-96 sm:w-auto">
     
      @foreach ($homes as $item)
       
    
      <img src="{{$item->image}}" class="transition hover:scale-90">
      <div class="mt-3 flex justify-between text-sm">
        <div>
          <h3
            class="text-black text-xl group-hover:underline group-hover:underline-offset-4 font-bold"
          >
          {{$item->title}}
          </h3>
    
          <p class="mt-1.5 max-w-[45ch] text-xs text-gray-500 overflow-hidden" style="max-height: 3em; text-overflow: ellipsis;">
            {{ substr($item->about, 0, 100) }}{{ strlen($item->about) > 250 ? "..." : "" }}
          </p>
        <div class="mt-5 transition  ">
        <a class="text-blue-400 hover:text-black" href="{{ route('display.show', ['id' => $item->id]) }}">View full image</a>
      </div>
        </div>
    
        
      </div>
   
      @endforeach
    
    
    <div>

    </section>
           

{{-- Sidebar ----------------------------------------------------------------------}}
<div id="drawer-navigation" class="fixed top-0 mt-20 left-0 z-50 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
  <h5 id="drawer-navigation-label" class="text-base font-semibold font-sans text-gray-500 uppercase dark:text-gray-400">7Wonders menu</h5>
  <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      <span class="sr-only">Close menu</span>
  </button>
<div class="py-4 overflow-y-auto">
    <ul class="space-y-2 font-medium">
    
       @auth
           
       <li>
        <button type="button" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
          <i class="fa-solid fa-user" style="color: #000000;"></i>
          <span class="p-4 font-bold uppercase">Welcome, {{ auth()->user()->name }}!</span>
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <ul id="dropdown-example" class="hidden py-2 space-y-2">
              <li>
                <a href="{{URL::to('uploads')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white  dark:hover:bg-gray-700 hover:bg-black hover:text-white">
                  <i class="fa-solid fa-chart-simple hover:text-white" ></i>
                   <span class="ml-3">Dashboard</span>
                </a>
                
              </li>
        
          
      
                
              <form method="POST" action="/logout" >
                @csrf
              <li>
                <button href="#" type="submit" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white  dark:hover:bg-gray-700 hover:bg-black hover:text-white">
                  <i class="fa-solid fa-right-from-bracket hover:text-white" ></i>
                  <span class="ml-3">Logout</span>
                </button>
                </li>
            </form>
        </ul>
     </li>
      
       
          
                 @else
                     
                 <li>
                   <a href="{{URL::to('register')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-black dark:hover:bg-gray-700 hover:text-white">
                     <i class="fa-solid fa-user-plus hover:text-white"></i>
                     <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
                   </a>
                </li>
                       </span>
                      </li>
   
                       <li>
                         <a href="{{URL::to('login')}}" class="flex items-center p-2 text-gray-900 hover:text-white rounded-lg dark:text-white hover:bg-black dark:hover:bg-gray-700">
                           <i class="fa-solid fa-right-to-bracket hover:text-white"></i>
                           <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
                         </a>
                      </li>
                      
               
                 @endauth         
                 <li>
                  <a href="#recent" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white  dark:hover:bg-gray-700 hover:bg-black hover:text-white">
                    <i class="fa-sharp fa-solid fa-address-card hover:text-white" ></i>
                     <span class="ml-3">Recent Images</span>
                  </a>
               </li>
               <li>
                <a href="#all" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white  dark:hover:bg-gray-700 hover:bg-black hover:text-white">
                  <i class="fa-sharp fa-solid fa-address-card hover:text-white" ></i>
                  <span class="ml-3">Albums</span>
                </a>
             </li>
           
                        
    </ul>
    
  
 </div>
</div>



    <footer aria-label="Site Footer" class="bg-white lg:grid lg:grid-cols-5">
      <div class="relative block h-32 lg:col-span-2 lg:h-full">
        <img
          src="../img/shout.jpg"
          alt=""
          class="absolute inset-0 object-cover w-full h-full"
        />
      </div>
    
      <div class="px-4 py-16 sm:px-6 lg:col-span-3 lg:px-8">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2">
          <div>
            <p>
              <span class="text-xs tracking-wide text-gray-500 uppercase">
                Call us
              </span>
    
              <a
                href="#"
                class="block text-2xl font-medium text-gray-900 hover:opacity-75 sm:text-3xl"
              >
                09101826029
              </a>
            </p>
    
            <ul class="mt-8 space-y-1 text-sm text-gray-700">
              <li>Here's our social medias</li>
              <li>Connect with us</li>
            </ul>
    
            <ul class="flex gap-6 mt-8">
              <li>
                <a
                  href="/"
                  rel="noreferrer"
                  target="_blank"
                  class="text-gray-700 transition hover:opacity-75"
                >
                  <span class="sr-only">Facebook</span>
    
                  <svg
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
              </li>
    
              <li>
                <a
                  href="/"
                  rel="noreferrer"
                  target="_blank"
                  class="text-gray-700 transition hover:opacity-75"
                >
                  <span class="sr-only">Instagram</span>
    
                  <svg
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
              </li>
    
              <li>
                <a
                  href="/"
                  rel="noreferrer"
                  target="_blank"
                  class="text-gray-700 transition hover:opacity-75"
                >
                  <span class="sr-only">Twitter</span>
    
                  <svg
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                  >
                    <path
                      d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                    />
                  </svg>
                </a>
              </li>
    
              <li>
                <a
                  href="/"
                  rel="noreferrer"
                  target="_blank"
                  class="text-gray-700 transition hover:opacity-75"
                >
                  <span class="sr-only">GitHub</span>
    
                  <svg
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
              </li>
    
              <li>
                <a
                  href="/"
                  rel="noreferrer"
                  target="_blank"
                  class="text-gray-700 transition hover:opacity-75"
                >
                  <span class="sr-only">Dribbble</span>
    
                  <svg
                    class="w-6 h-6"
                    fill="currentColor"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
    
          <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div class="hidden md:grid grid-cols-1 gap-4">
              <p class="font-medium text-gray-900">Services</p>
    
              <nav aria-label="Footer Navigation - Services" class="mt-6">
                <ul class="space-y-4 text-sm">
                  <li>
                    <a href="#" class="text-gray-700 transition hover:opacity-75">
                      1on1 Coaching
                    </a>
                  </li>
    
                  <li>
                    <a href="#" class="text-gray-700 transition hover:opacity-75">
                      Company Review
                    </a>
                  </li>
    
                  <li>
                    <a href="#" class="text-gray-700 transition hover:opacity-75">
                      Accounts Review
                    </a>
                  </li>
    
                  <li>
                    <a href="#" class="text-gray-700 transition hover:opacity-75">
                      HR Consulting
                    </a>
                  </li>
    
                  <li>
                    <a href="#" class="text-gray-700 transition hover:opacity-75">
                      SEO Optimisation
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
                    <a href="#" class="text-gray-700 transition hover:opacity-75">
                      About
                    </a>
                  </li>
    
                  <li>
                    <a href="#" class="text-gray-700 transition hover:opacity-75">
                      Meet the Team
                    </a>
                  </li>
    
                  <li>
                    <a href="#" class="text-gray-700 transition hover:opacity-75">
                      Accounts Review
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
              &copy; 2022. Company Name. All rights reserved.
            </p>
          </div>
        </div>
      </div>
    </footer>

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
     <script src="../../js/scroll.js"></script>
     <script src="../js/nav.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
        <script src="https://unpkg.com/taos@1.0.2/dist/taos.js"></script>
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
        </body>
        </html>
      
