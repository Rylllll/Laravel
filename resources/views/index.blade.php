
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



<html class="scroll-smooth">
<!-- ... -->

</html>



<body class="">


 

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
 
<section
  class="bg-cover bg-center bg-no-repeat bg-fixed" style="background-image: url('../img/shout.jpg'); top: 0%; height: 110vh;"
>
 

  <div
    class="relative mx-auto px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8 mt-0  container flex flex-col-reverse items-center space-y-0 md:space-y-0 md:flex-row text-[#212121]"
  >
    <div class="max-w-xl text-center sm:text-left mt-5">
      <h1 class="text-3xl font-extrabold sm:text-5xl">
       Welcome to
       <strong class="block font-extrabold text-[#212121] font-delirium max-w-full text-9xl md:text-9xl">
        Wonders of the world
      </strong>
    
      </h1>
   
      <p class="text-white mt-4 max-w-lg sm:text-xl sm:leading-relaxed w-full">
        Step into the world of wonder and marvel at the awe-inspiring creations of our ancestors, experience the magnificence of human achievement as you embark on a journey to discover the wonders that have stood the test of time
      </p>

      <div class="mt-8 flex flex-wrap gap-4 text-center">
        <a class="group relative inline-block text-sm font-medium text-white focus:outline-none focus:ring active:text-[#212121] w-full md:w-1/2 sm:w-full text-center" href="">
          <span class="absolute inset-0 border border-current rounded-lg"></span>
          <span class="block border border-current bg-[#212121] p-6 transition-transform group-hover:-translate-x-1 group-hover:-translate-y-1 rounded-lg">
            Lets go </span></a>
      </div>
      <div class="mt-10">
        <i class="fab fa-facebook-f fa-lg cursor-pointer bg-blue rounded-lg text-white p-4 hover:bg-blue-600  transition duration-300"></i>
        <i class="fab fa-youtube fa-lg bg-red rounded-lg p-4 cursor-pointer hover:bg-red-700  text-white transition duration-300"></i>
        <i class="fab fa-instagram fa-lg bg-red rounded-lg p-4 cursor-pointer hover:bg-gradient-to-br from-[#ff9800]  text-white to-[#f50057] transition duration-300"></i>
        <i class="fab fa-github fa-lg rounded-lg p-4 cursor-pointer hover:bg-gray-600  text-white transition duration-300"></i>
       </div>
    </div>
  </div>
</section> 


<div class="py-16 bg-white">  
    
    <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6 text-left">
        <h1 class="p-4 text-black rounded-full mb-10 w-full sm:w-1/12 text-center bg-[#eeeeee] font-bold">01 - About</h1>
        <div class="border border-[#e0e0e0] 1px "></div>
        <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12 p-9">

          <section class="bg-white dark:bg-gray-900">
            <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Travel and see the world with your eyes</h2>
                    <p class="mb-4">We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need.</p>
                    <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick.</p>
                </div>
                <div class="grid grid-cols-2 gap-4 mt-8">
                    <img class="w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png" alt="office content 1">
                    <img class="mt-4 w-full lg:mt-10 rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png" alt="office content 2">
                </div>
            </div>
        </section>
          
        </div>

        </div>
    </div>

    <!-- component -->
<!-- This is an example component -->

  </div>

    <!--Services-->
 
<div class="py-16 ">  
    <div class="container m-auto px-6 text-gray-500 md:px-12 xl:px-0">
        <h1 class="p-4 text-black rounded-full mb-10 w-1/4 text-center bg-[#eeeeee] font-bold">02 - Services we offer</h1>
        <div class="border border-[#e0e0e0] 1px "></div>
        <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-3 p-9">
            <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                <div class="mb-12 space-y-4">
                    <h3 class="text-2xl font-semibold text-black"></i> High definition pictures</h3>
                    <p class="mb-6">Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.</p>
                    <a href="#" class="block font-medium text-black">Know more</a>
                </div>
                <img src="../img/gall.jpg" class="w-2/3 ml-auto -mb-12" alt="illustration" loading="lazy" width="900" height="600">
            </div>
            <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                <div class="mb-12 space-y-4">
                    <h3 class="text-2xl font-semibold text-black"><i class="fa-regular fa-square-info"></i>Detailed information</h3>
                    <p class="mb-6">Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.</p>
                    <a href="#" class="block font-medium text-black">Know more</a>
                </div>
                <img src="../img/read.jpg" class="w-2/3 ml-auto" alt="illustration" loading="lazy" width="900" height="600">
            </div>
            <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                <div class="mb-12 space-y-4">
                    <h3 class="text-2xl font-semibold text-black">Remarkable tips</h3>
                    <p class="mb-6">Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.</p>
                    <a href="#" class="block font-medium text-black">Know more</a>
                </div>
                <img src="../img/teach.jpg" class="w-2/3 ml-auto " alt="illustration" loading="lazy" width="900" height="600">
            </div>
        </div>
    </div>
</div>


 
<div class="py-16">  
  <div class="container m-auto px-6 text-gray-500 md:px-12 xl:px-0">
      <h1 class="p-4 text-black rounded-full mb-10 w-1/4 text-center bg-[#eeeeee] font-bold">03 - Gallery</h1>
      <div class="border border-[#e0e0e0] 1px "></div>
      <section>
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
          <header>
            <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">
              Travel spot gallery
            </h2>
      
            <p class="max-w-md mt-4 text-gray-500">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque
              praesentium cumque iure dicta incidunt est ipsam, officia dolor fugit
              natus?
            </p>
          </header>
      
      



  
   
    <div class="grid grid-cols-2 gap-4 md:grid-cols-3 2xl:mx-auto 2xl:container lg:px-20 lg:py-16 md:py-12 md:px-6 py-9 w-96 sm:w-auto">

      @foreach ($home as $item)
 
<article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg">
  <img
    alt="Office"
    src="{{$item->image}}"
    class="h-56 w-full object-cover"
  />

  <div class="bg-white p-4 sm:p-6">
    <time datetime="2022-10-10" class="block text-xs text-gray-500">
      10th Oct 2022
    </time>

    <a href="#">
      <h3 class="mt-0.5 text-lg text-gray-900">
        {{$item->title}}
      </h3>
    </a>

    <p class="mt-2 text-sm leading-relaxed text-gray-500 line-clamp-3">
      {{$item->about}}
    </p>
  </div>
</article>


    
      @endforeach
    
    

        
        </div>
        
      </section>

  </div>
  
</div>

{{-- 
    <section id="gallery" class="relative mx-auto px-6 sm:px-6 mt-20 ">
        <!--Tabs-------------<div class="w-1500 sm:w-7/12 sm:mx-auto ">--------------------------------->
        <div class="w-auto sm:w-7/12 sm:mx-auto bg-white rounded-lg">
            <div role="tablist" aria-label="tabs" class="bg-black relative w-full mx-auto h-12 grid grid-cols-3 items-center px-[3px] shadow-2xl shadow-900/20 transition">
                <div class="absolute indicator h-11 my-auto top-0 bottom-0 left-0 shadow-md border-b  border-white"></div>
                <button role="tab" aria-selected="true" aria-controls="panel-1" id="tab-1" tabindex="0" class="relative block h-10 px-6 tab rounded-full ">
              <span class="text-white text-xl"> Mountains</span>
            </button>
                <button role="tab" aria-selected="false" aria-controls="panel-2" id="tab-2" tabindex="-1" class="relative block h-10 px-6 tab rounded-full">
              <span class="text-white text-xl">Beaches</span>
            </button>
                <button role="tab" aria-selected="false" aria-controls="panel-3" id="tab-3" tabindex="-1" class="relative block h-10 px-6 tab rounded-full">
              <span class="text-white text-xl">Caves</span>
            </button>

            </div>

            <div class="mt-20 relative rounded-lg bg-white">
                <div role="tabpanel" id="panel-1" class="tab-panel p-6 transition duration-300">

                    <h2 class="text-xl font-semibold text-black text-center ">
                        <i class="fa-solid fa-mountains"></i> Diffrent mountains in the world
                    </h2>
                    <p class="mt-4 text-black text-center p-5">Mountains are some of the most breathtaking natural features on Earth. They are characterized by their towering heights, rugged terrain, and diverse ecosystems. Mountains play an important role in shaping our planet's climate, weather
                        patterns, and water cycles. They are also rich in natural resources and provide habitats for a wide variety of plant and animal species. From the majestic peaks of the Himalayas to the scenic ranges of the Rocky Mountains, mountains
                        are a source of inspiration and wonder for people all over the world. Whether you enjoy hiking, skiing, or simply taking in the panoramic views, there is something truly awe-inspiring about these natural wonders that draws us to
                        them.
                    </p>
                    <div class="w-full p-5 pb-10 mx-auto mb-10 gap-5 columns-3 space-y-5 rounded-lg overflow-y-auto max-h-1000">

                        <img class="rounded-lg  cursor-pointer h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125 " src="../img/m1.jpg" alt="">
                        <img class="rounded-lg cursor-pointer" src="../img/m2.jpg" alt="">
                        <img class="rounded-lg cursor-pointer" src="../img/m3.jpg" alt="">
                        <img class="rounded-lg cursor-pointer" src="../img/m4.jpg" alt="">
                        <img class="rounded-lg cursor-pointer" src="../img/m5.jpg" alt="">



                        <div id="data-container">


                        </div>
                    </div>

                </div>

                <div role="tabpanel" id="panel-2" class="absolute top-0 invisible opacity-0 tab-panel p-6 transition duration-300">
                    <h2 class="text-xl font-semibold text-black text-center">Diffrent beaches in the world</h2>
                    <p class="mt-4 text-black text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas dolores voluptate temporibus, atque ab eos, delectus at ad hic voluptatem veritatis iure, nulla voluptates quod nobis doloremque eaque! Perferendis, soluta.</p>
                    <div class="w-full p-5 pb-10 mx-auto mb-10 gap-5 columns-3 space-y-5 rounded-lg">
                        <img class="rounded-lg cursor-pointer h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="../img/d1.jpg" alt="">
                        <img class="rounded-lg cursor-pointer" src="../img/d2.jpg" alt="">
                        <img class="rounded-lg cursor-pointer" src="../img/d3.jpg" alt="">
                        <img class="rounded-lg cursor-pointer" src="../img/d4.jpg" alt="">
                        <img class="rounded-lg cursor-pointer" src="../img/d5.jpg" alt="">
                        <img class="rounded-lg cursor-pointer" src="../img/d6.jpg" alt="">
                    </div>

                </div>
                <div role="tabpanel" id="panel-3" class="absolute top-0 invisible opacity-0 tab-panel p-6 transition duration-300">
                    <h2 class="text-xl font-semibold text-black text-center">Diffrent caves in the world</h2>
                    <p class="mt-4 text-black text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas dolores voluptate temporibus, atque ab eos, delectus at ad hic voluptatem veritatis iure, nulla voluptates quod nobis doloremque eaque! Perferendis, soluta.</p>
                    <div class="w-full p-5 pb-10 mx-auto mb-10 gap-5 columns-3 space-y-5 rounded-lg">
                        <img class="rounded-lg cursor-pointer h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="../img/d1.jpg" alt="">
                        <img class="rounded-lg cursor-pointer" src="../img/d2.jpg" alt="">
                        <img class="rounded-lg cursor-pointer" src="../img/d3.jpg" alt="">
                        <img class="rounded-lg cursor-pointer" src="../img/d4.jpg" alt="">
                        <img class="rounded-lg cursor-pointer" src="../img/d5.jpg" alt="">
                        <img class="rounded-lg cursor-pointer" src="../img/d6.jpg" alt="">
                    </div>

                </div>


            </div>
        </div>


    </section> --}}

    <div class="py-16 ">  
        <div class="container m-auto px-6 text-gray-500 md:px-12 xl:px-0">
            <h1 class="p-4 text-black rounded-full mb-10 w-1/4 text-center bg-[#eeeeee] font-bold">03-Contact us</h1>
            <div class="border border-[#9e9e9e] 1px "></div>
            <div class="mx-auto grid gap-6 md:w-3/4 lg:w-full lg:grid-cols-3 p-9">
                <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                    <div class="mb-12 space-y-4">
                        <h3 class="text-2xl font-semibold text-black"><i class="fa-regular fa-image"></i> High definition pictures</h3>
                        <p class="mb-6">Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.</p>
                        <a href="#" class="block font-medium text-black">Know more</a>
                    </div>
                    <img src="../img/gall.jpg" class="w-2/3 ml-auto -mb-12" alt="illustration" loading="lazy" width="900" height="600">
                </div>
                <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                    <div class="mb-12 space-y-4">
                        <h3 class="text-2xl font-semibold text-black"><i class="fa-regular fa-square-info"></i>Detailed information</h3>
                        <p class="mb-6">Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.</p>
                        <a href="#" class="block font-medium text-black">Know more</a>
                    </div>
                    <img src="../img/read.jpg" class="w-2/3 ml-auto" alt="illustration" loading="lazy" width="900" height="600">
                </div>
                <div class="bg-white rounded-2xl shadow-xl px-8 py-12 sm:px-12 lg:px-8">
                    <div class="mb-12 space-y-4">
                        <h3 class="text-2xl font-semibold text-black">Remarkable tips</h3>
                        <p class="mb-6">Obcaecati, quam? Eligendi, nulla numquam natus laborum porro at cum, consectetur ullam tempora ipsa iste officia sed officiis! Incidunt ea animi officiis.</p>
                        <a href="#" class="block font-medium text-black">Know more</a>
                    </div>
                    <img src="../img/teach.jpg" class="w-2/3 ml-auto " alt="illustration" loading="lazy" width="900" height="600">
                </div>
            </div>
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
              <div>
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
      
              <div>
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
      

{{-- 
    <footer class="bg-gray-900">
        <div class="max-w-6xl mx-auto py-8 px-4 sm:px-6 lg:px-8 flex flex-wrap justify-between">
            <div class="w-full lg:w-2/5 mb-4 lg:mb-0">
                <h2 class="text-xl font-semibold text-white mb-4">About Us</h2>
                <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.</p>
            </div>
            <div class="w-full lg:w-1/4 mb-4 lg:mb-0">
                <h2 class="text-xl font-semibold text-white mb-4">Quick Links</h2>
                <ul class="list-none">
                    <li>
                        <i class="fas fa-home mr-2 text-white"></i>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">Home</a>
                    </li>
                    <li>
                        <i class="fas fa-info-circle text-white mr-2"></i>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">About Us</a>
                    </li>
                    <li>
                        <i class="fas fa-cog  text-white mr-2"></i>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">Services</a>
                    </li>
                    <li>
                        <i class="fas fa-newspaper text-white mr-2"></i>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">Blog</a>
                    </li>
                    <li>
                        <i class="fas fa-envelope text-white mr-2"></i>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">Contact</a>
                    </li>
                </ul>

            </div>

            <div class="w-full lg:w-1/4 mb-4 lg:mb-0 text-white ">
                <h2 class="text-xl font-semibold text-white mb-4">Social media</h2>
                <ul class="list-none">
                    <li>
                        <i class="fab fa-facebook-f text-white bg-blue rounded-lg p-4 cursor-pointer hover:bg-blue-600"></i>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">Facebook</a>
                    </li>
                    <li>
                        <i class="fab fa-instagram text-white bg-red rounded-lg p-4 cursor-pointer hover:bg-gradient-to-br from-[#ff9800] to-[#f50057]"></i>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">Instagram</a>
                    </li>
                    <li>
                        <i class="fab fa-twitter text-white bg-red rounded-lg p-4 cursor-pointer hover:bg-[#03a9f4]"></i>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">Twitter</a>
                    </li>
                    <li>
                        <i class="fab fa-youtube text-white bg-red rounded-lg p-4 cursor-pointer hover:bg-red-700"></i>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">Youtube</a>
                    </li>
                    <li>
                        <i class="fab fa-github text-white bg-red rounded-lg p-4 cursor-pointer hover:bg-gray-600"></i>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">Github</a>
                    </li>
                </ul>
            </div>
            <div class="w-full lg:w-1/4">
                <h2 class="text-xl font-semibold text-white mb-4">Contact Us</h2>
                <p class="text-gray-400"><i class="fa-solid fa-map-marker-alt mr-2"></i>123 Main Street, Suite 100<br>City, State 12345</p>
                <p class="text-gray-400 mt-4"><i class="fa-solid fa-phone mr-2"></i>(123) 456-7890</p>
                <p class="text-gray-400 mt-4"><i class="fa-solid fa-envelope mr-2"></i>info@example.com</p>
            </div>
        </div>
        <div class="bg-gray-800 py-4 px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto text-center text-gray-400">

                <p class="text-sm">&copy; 2023 7wonders. All Rights Reserved.</p>
            </div>
        </div>
    </footer> --}}

    <!--Modal--------------------------------------------------------------------------------------------------------------------------------------------------------------->






    </div>
    </div>
    @if (session()->has('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm"
    >  <p class="text-sm font-medium">
    
      {{ session('success') }}
    </p>
    
    
    </div>
    @endif
</body>
{{-- <script>
    $(document).ready(function() {
        updateUserName();
    });
</script> --}}
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
<!-- <script src="wow.min.js"></script> -->
<script src="./main.js"></script>
<script src="./modal.js"></script>
<script src="./get.js"></script>
<script src="./display.js"></script>


</html>