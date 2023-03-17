<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
     @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                <a  id="navbar-login-btn" href="{{URL::to('login')}}" class="group relative inline-block overflow-hidden border border-[#212121] px-8 py-3 focus:outline-none focus:ring" href="/download">
                <span class="absolute inset-x-0 bottom-0 h-[2px] bg-[#212121] transition-all group-hover:h-full group-active:bg-[#212121]"></span>
              
                <span class="relative text-sm font-medium text-[#212121] transition-colors group-hover:text-white">
                Login
                </span></a>
                
                <a id="navbar" name="user" href="#" class="text-[#212121]"></a>
            </div>
        </div>
    </nav>

<section id="hero" class="one bg-cover bg-no-repeat bg-fixed" style="background-image: url('../img/shout.jpg'); top: 0%; height: 100vh;">
      <!-- Flex Container -->
      <div
        class=" mt-0 relative container flex flex-col-reverse items-center px-6 mx-auto space-y-0 md:space-y-0 md:flex-row text-[#212121] md:top-52"
      >
        <!-- Left item -->
        <div class="flex flex-col mb-32 space-y-12 md:w-1/2 ">
            <h1
            class="max-w-md text-5xl font-bold text-center md:text-5xl md:text-left font-sans"
          >
           Welcome to
          </h1>
          <h1
            class="max-w-full text-9xl font-bold text-center md:text-9xl md:text-left font-delirium md:mt-0"
          >
          Wonders of the world
          </h1>
          <p class="max-w-sm text-center text-white md:text-left">
            Step into the world of wonder and marvel at the awe-inspiring creations of our ancestors. <br> From the towering Great Pyramid of Giza to the breathtaking Taj Mahal, <br>experience the magnificence of human achievement <br> as you embark
                on a journey to discover the seven wonders that have stood the test of time
          </p>
          <div class="flex justify-center md:justify-start">
    
            <!-- Base -->


<a class="group relative inline-block text-sm font-medium text-white focus:outline-none focus:ring active:text-[#212121] w-1/2 text-center" href="">
<span class="absolute inset-0 border border-current rounded-lg"></span>
<span class="block border border-current bg-[#212121] px-12 py-3 transition-transform group-hover:-translate-x-1 group-hover:-translate-y-1 rounded-lg">
  Lets go </span></a>

          
          </div>
          <div class="">
            <i class="fab fa-facebook-f fa-lg cursor-pointer bg-blue rounded-lg p-4 hover:bg-blue-600 hover:text-white transition duration-300"></i>
            <i class="fab fa-youtube fa-lg bg-red rounded-lg p-4 cursor-pointer hover:bg-red-700 hover:text-white transition duration-300"></i>
            <i class="fab fa-instagram fa-lg bg-red rounded-lg p-4 cursor-pointer hover:bg-gradient-to-br from-[#ff9800] to-[#f50057] hover:text-white transition duration-300"></i>
            <i class="fab fa-github fa-lg rounded-lg p-4 cursor-pointer hover:bg-gray-600 hover:text-white transition duration-300"></i>
           </div>
    </div>
    <!-- component -->
<script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

        <!-- Image -->
        {{-- <div class="md:w-1/2 ">
            <img src="img/trav.png" class="rounded-lg relative" alt="" />
          </div>
      </div> --}}
 
    </section>

    {{-- <div id="van" >
        <div class="relative mx-auto text-black top-96 text-center ">
            <p class="font-delirium text-3xl sm:text-sm md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl sm:top-0">Welcome to</p>
            <h1 class="font-delirium text-5xl sm:text-5xl md:text-8xl lg:text-9xl xl:text-10xl 2xl:text-11xl">Wonders of the world</h1>
            <p class="mt-4 text-black text-center p-5 text-sm sm:text-base md:text-lg lg:text-2xl xl:text-2xl 2xl:text-3xl">"Step into the world of wonder and marvel at the awe-inspiring creations of our ancestors. <br> From the towering Great Pyramid of Giza to the breathtaking Taj Mahal, <br>experience the magnificence of human achievement <br> as you embark
                on a journey to discover the seven wonders that have stood the test of time."</p>
            <button class="relative top-55 bg-black hover:bg-blue-400 text-black font-bold py-2 px-4 rounded-md border-4 border-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 active:translate-y-1 active:border-blue-500 text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl 2xl:text-3xl">
            <a href="#what">Lets go!</a>
          </button>
        </div>
    </div> --}}

<!---About-->
<!-- component -->
<div class="py-16 bg-white">  
    
    <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6 text-left">
        <h1 class="p-4 text-black rounded-full mb-10 w-full sm:w-1/12 text-center bg-[#eeeeee] font-bold">01-About</h1>
        <div class="border border-[#9e9e9e] 1px "></div>
        <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12 p-9">
          <!-- component -->

<div class="max-w-2xl mx-auto">

	<div id="default-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
          
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="../img/d1.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="../img/M1.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="../img/d2.jpg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
           
        
        </div>
        <!-- Slider indicators -->
        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
     
            </span>
        </button>
        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
             
            </span>
        </button>
    </div>

	<p class="mt-5">The wonders of the world are not only awe-inspiring, but they also represent the remarkable achievements of human creativity, innovation, and perseverance throughout history, and therefore, visiting them is a truly once-in-a-lifetime experience that everyone should have the opportunity to enjoy.
	</p>

</div>
          <div class="md:7/12 lg:w-6/12">
            <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">Travel and see the world</h2>
            <p class="mt-6 text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eum omnis voluptatem accusantium nemo perspiciatis delectus atque autem! Voluptatum tenetur beatae unde aperiam, repellat expedita consequatur! Officiis id consequatur atque doloremque!</p>
            <p class="mt-4 text-gray-600"> Nobis minus voluptatibus pariatur dignissimos libero quaerat iure expedita at? Asperiores nemo possimus nesciunt dicta veniam aspernatur quam mollitia.</p>
          </div>
        </div>

        </div>
    </div>

    <!-- component -->
<!-- This is an example component -->

  </div>

    <!--Services-->
 
<div class="py-16 ">  
    <div class="container m-auto px-6 text-gray-500 md:px-12 xl:px-0">
        <h1 class="p-4 text-black rounded-full mb-10 w-1/4 text-center bg-[#eeeeee] font-bold">02-Services we offer</h1>
        <div class="border border-[#9e9e9e] 1px "></div>
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


<div id="data-container">


</div>


   
<div class="py-16 ">  
    <div class="container m-auto px-6 text-gray-500 md:px-12 xl:px-0">
        <h1 class="p-4 text-black rounded-full mb-10 w-1/4 text-center bg-[#eeeeee] font-bold">03-Contact us</h1>
        <div class="border border-[#9e9e9e] 1px "></div>
        <div
  id="carouselExampleControls"
  class="relative"
  data-te-carousel-init
  data-te-carousel-slide>
  <div
    class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
    <div
      class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-item
      data-te-carousel-active>
      <img
        src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp"
        class="block w-full"
        alt="Wild Landscape" />
    </div>
    <div
      class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-item>
      <img
        src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp"
        class="block w-full"
        alt="Camera" />
    </div>
    <div
      class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-item>
      <img
        src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp"
        class="block w-full"
        alt="Exotic Fruits" />
    </div>
  </div>
  <button
    class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
    type="button"
    data-te-target="#carouselExampleControls"
    data-te-slide="prev">
    <span class="inline-block h-8 w-8">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="h-6 w-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </span>
    <span
      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Previous</span
    >
  </button>
  <button
    class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
    type="button"
    data-te-target="#carouselExampleControls"
    data-te-slide="next">
    <span class="inline-block h-8 w-8">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="h-6 w-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M8.25 4.5l7.5 7.5-7.5 7.5" />
      </svg>
    </span>
    <span
      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Next</span
    >
  </button>
</div>
    </div>
</div>


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
</body>
<script>
    $(document).ready(function() {
        updateUserName();
    });
</script>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
<!-- <script src="wow.min.js"></script> -->
<script src="./main.js"></script>
<script src="./modal.js"></script>
<script src="./get.js"></script>
<script src="./display.js"></script>


</html>