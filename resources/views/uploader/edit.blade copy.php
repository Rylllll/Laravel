
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <link rel="icon" type="image/png" href="../../img/Logo.png" />
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
    <title>Wonders Dashboard/Tables</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="../../assets/css/soft-ui-dashboard-tailwind.css?v=1.0.4" rel="stylesheet" />

</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-[#fff3e0] text-slate-500">
  <aside
  class="hidden max-w-62.5 ease-nav-brand lg:block lr:hidden fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-2xl transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent"
  >
  <div class="h-19.5 ">
      <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden"
          sidenav-close></i>
      <a class="block px-8 py-6 m-0 mx-auto text-xl whitespace-nowrap text-slate-700 font-sans"
          href="{{URL::to('/')}}" target="_blank">
          <img src="../../img/templog.png"
              class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8"
              alt="main_logo" />
          <span class="ml-1 font-semibold transition-all duration-200 font-sans ease-nav-brand">Wonders</span>
      </a>
  </div>


  <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

  <nav aria-label="Main Nav" class="flex flex-col space-y-1 p-4 h-sidenav">
      <a href="" class="flex items-center gap-2 rounded-lg bg-black px-4 py-2 text-white">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-75" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                  d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>

          <span class="text-sm font-medium"> Dashboard </span>
      </a>

      <details class="group [&_summary::-webkit-details-marker]:hidden">
          <summary
              class="group flex items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
             

          
          </summary>

     
      </details>

     

    

      <details class="group [&_summary::-webkit-details-marker]:hidden">
          <summary
              class="group flex items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
              <div class="flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 opacity-75" fill="none"
                      viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round"
                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                  </svg>

                  <span class="text-sm font-medium"> Account </span>
              </div>

              <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                      fill="currentColor">
                      <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd" />
                  </svg>
              </span>
          </summary>

          <nav aria-label="Account Nav" class="mt-2 flex flex-col space-y-1 px-4">
            

             
              <form method="POST" action="/logout" class="">
                  @csrf


                  <button type="submit"
                      class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                      Logout
                  </button>
              </form>

          </nav>
      </details>
  </nav>

</aside>

    


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
   Tables
  </span>
</a>
  </div>

  <form method="POST" action="{{ route('uploads.update', $upload->id) }}" enctype="multipart/form-data">
                   
    @csrf
    @method('PUT')

      

        <div class=" rounded-2xl sm:overflow-hidden sm:rounded-md">

            <div class=" bg-white px-4 sm:p-6">
                        <div>
                                <label for="category" class="block text-sm font-bold leading-6 text-gray-900">Category</label>
                                <select required id="category" name="category"
                                    class="mb-3 mt-1 block w-full rounded-md border-gray-500 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6">
                                    <option value="">Select a category</option>
                                    <option value="Mountain">Mountain</option>
                                    <option value="Cave">Cave</option>
                                    <option value="Beach">Beach</option>
                                    <option value="Forest">Forest</option>
                                    <option value="Cities">City</option>
                                </select>
                            </div>

                <div>
  
                    <label for="about" class="block text-sm font-bold leading-6 text-gray-900">Title of the image</label>
                    <input required placeholder="Input title" type="text" name="title" id="title" value="{{ $upload->title }}" class="mb-3 mt-1 block w-full rounded-md border-gray-500 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"
                    />
                    <label for="about" class="block text-sm font-bold leading-6 text-gray-900 mb-3">About (Brief description about the place or destination.)</label>
                    <div class="mt-2">
                      <textarea required id="about" name="about" rows="3" class="mt-1 block w-full rounded-md text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6 border-gray-500"
          style="max-height: 150px; max-width: 100%; resize: vertical;" placeholder="Information" >{{ $upload->about }}</textarea>

                    </div>

                </div>


                <div class="w-100 h-100">
                    <img id="preview-img" class="w-full h-full object-contain" alt="">
                </div>


                <div>
                    <label class="block text-sm font-bold leading-6 text-gray-900">Upload image section</label>
                    <div class="mt-2 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
      <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
                            <div class="flex text-sm text-gray-600">
                                <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-medium text-blue-900 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
     
        <input type="file" name="image" id="image" class="cursor-pointer flex justify-center text-sm" onchange="loadFile(event)" accept="image/jpeg, image/png, image/gif"  size="10000000">
      
      </label>
                                
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                        </div>
                        
                    </div>
                    <img id="output" class="mt-5 flex mx-auto justify-center h-50 w-full" src="../../img/prev1.jpg" alt="">
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
   
 



</body>
<!-- plugin for scrollbar  -->
<script src="../../assets/js/plugins/perfect-scrollbar.min.js " async></script>
<script async defer src="https://buttons.github.io/buttons.js "></script>
<script src="../../assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4 " async></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script src="../../js/alert.js " async></script>
</html>