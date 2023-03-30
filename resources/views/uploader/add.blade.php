
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../img/favicon.png" />
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
   <!-- Sweet Alert CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

@include('sweetalert::alert')
<!-- Sweet Alert JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    @vite('resources/css/app.css')
    <title>7Wonders Dashboard/Tables</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="../assets/css/soft-ui-dashboard-tailwind.css?v=1.0.4" rel="stylesheet" />

</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-[#fff3e0] text-slate-500">

    


    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <!-- Navbar -->
        <nav class="flex flex-wrap items-center justify-between px-0 py-2 mx-6  rounded-2xl lg:flex-nowrap lg:justify-start bg-white shadow-xl mt-4"
        navbar-main navbar-scroll="true">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
            <nav>
                <!-- breadcrumb -->
                <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                    <li class="leading-normal text-sm">
                        <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
                    </li>
                    <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']"
                        aria-current="page">Dashboard</li>
                </ol>
                <h6 class="mb-0 font-bold capitalize">Tables</h6>
            </nav>

            <div class="flex justify-between space-x-2 lg:flex hidden">
                @auth
                    <span class="p-4 font-bold uppercase">Welcome, {{ auth()->user()->name }}!</span>

                
                        @csrf
                      
                @else
          
                @endauth


                <a id="navbar" name="user" href="#" class="text-[#212121]"></a>
            </div>
            <div class="block lg:hidden">
                <button
                  class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-600/75 "data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation"
                  id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
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



<div class="p-4 mt-10">

<div class="p-4 text-gray-900 bg-white rounded-2xl shadow-xl">
  <div class="p-4 flex">
    <h1 class="text-xl font-bold">Edit Picture</h1>

    <div class="flex items-center md:ml-auto md:pr-4">
     
  </div>
  <a
  class="hidden md:block  group relative inline-flex items-center overflow-hidden rounded bg-[#212121] px-8 py-3 text-white focus:outline-none focus:ring active:bg-[#212121]"
  href="{{URL::to('uploads')}}"
>
  <span
    class="absolute left-0 -translate-x-full transition-transform group-hover:translate-x-4"
  >
    <svg
      class="h-5 w-5"
      xmlns="http://www.w3.org/2000/svg"
      fill="none"
      viewBox="0 0 24 24"
      stroke="currentColor"
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="M17 8l4 4m0 0l-4 4m4-4H3"
      />
    </svg>
  </span>

  <span class="text-sm font-medium transition-all group-hover:ml-4">
   Dashboard
  </span>
</a>
  </div>
  
  <form method="POST" action="{{ url('uploads') }}" enctype="multipart/form-data">
               
    {!! csrf_field() !!}


      

        <div class=" rounded-2xl sm:overflow-hidden sm:rounded-md">

            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">


                <div>
  
                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Title of the image</label>
                    <input required placeholder="Input title" type="text" name="title" id="title" class="mb-3 mt-1 block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"
                    />
                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900 mb-3">About (Brief description about the place or destination.)</label>
                    <div class="mt-2">
                        <textarea required id="about" name="about" rows="3" class="mt-1 block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"
                            style="" placeholder="Information"></textarea>
                    </div>

                </div>


                <div class="w-100 h-100">
                    <img id="preview-img" class="w-full h-full object-contain" alt="">
                </div>


                <div>
                    <label class="block text-sm font-medium leading-6 text-gray-900">Upload image section</label>
                    <div class="mt-2 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
      <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
                            <div class="flex text-sm text-gray-600">
                                <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-medium text-blue-900 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
        <span>Upload a file</span>
        <input type="file" name="image" id="image" class="cursor-pointer" onchange="loadFile(event)" >
      </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                <button type="submit" value="Save" name="submit" class=" inline-flex justify-center rounded-lg bg-black py-2 px-3 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 w-full focus-visible:outline-indigo-500">Save</button>
            </div>
        </div>

</form>
<div class="p-4 lg:hidden">
  <div id="dropdown" class="fixed top-0 z-10 hidden bg-white divide-x divide-gray-100 rounded-2xl shadow dark:bg-gray-700 mt-2 transition duration-300 w-full p-4">
      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
          <ul class="flex justify-between ">
              @auth
                  <span class="p-4 font-bold uppercase">Welcome, {{ auth()->user()->name }}!</span>
      
            
                      @csrf
              @else
              @endauth
              <a id="navbar" name="user" href="#" class="text-[#212121]"></a>
              </ul>
         
        <li>
          <a href="{{'/uploads'}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
        </li>
        <form method="POST" action="/logout" class="">
          @csrf
        <li>
          <button type="submit" href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</button>
        </li>
      </form>
  
  </ul>
  </div>
  </div>
  
</div>
</div>


    </main>
    
    {{-- <script>
        function openModal() {
    var modal = document.getElementById("modal");
    modal.classList.remove("hidden");
  }
  function closeModal() {
    var modal = document.getElementById("modal");
    modal.classList.add("hidden");
  }
    </script> --}}



</body>
<!-- plugin for scrollbar  -->
<script src="../assets/js/plugins/perfect-scrollbar.min.js " async></script>
<script async defer src="https://buttons.github.io/buttons.js "></script>
<script src="../assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4 " async></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</html>