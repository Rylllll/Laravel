
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" type="image/png" href="../../img/Logo.png" />
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
</head>

<body class="font-sans">

    <button x-data="topBtn" @click="scrolltoTop" id="topButton"
    class="fixed z-20 hidden p-3 bg-blue-400 rounded-full shadow-md bottom-10 right-10 animate-bounce transform-gpu translate-z-0 hover:translate-z-1">
    <i class="fa-solid fa-chevron-up w-6 h-5" style="color: #000000; transform: translateZ(0.1rem);"></i>
</button>

    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700 font-sans">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <button data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation"
                      type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="#" class="flex ml-2 md:mr-24">
                        <img src="../../img/ph.png" class="h-8 mr-3" alt="FlowBite Logo" />

                    </a>
                </div>
                @auth



             

                
                        <h1 class="text-center font-bold uppercase px-7">Welcome, {{ auth()->user()->name }}!</h1>
                       

            @else
              

            @endauth

            </div>
        </div>
    </nav>

    {{-- Breadcrumbs --}}
    <div class="bg-gray-100 font-sans">
        <nav class="container flex px-7 mx-auto py-3 text-gray-700 bg-gray-100 dark:bg-gray-800 dark:border-gray-700 md:mt-16 justify-left md:justify-end w-full"
            aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3 gap-1">
                <li class="inline-flex items-center">
                    <a href="/"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <i class="fa-solid fa-house text-black"></i>
                    </a>
                </li>
                <li>
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-angle-right text-black text-xs"></i>
                        <a href="/uploads"
                            class="ml-1 text-sm font-medium md:ml-2 dark:text-gray-400 dark:hover:text-white">Dashboard</a>
                        <i class="fa-solid fa-angle-right text-black text-xs"></i>
                        <a
                            class="ml-1 text-sm font-medium text-[#03a9f4]  md:ml-2 dark:text-gray-400 dark:hover:text-white">Edit images</a>
                    </div>
                </li>
            </ol>
        </nav>

    </div>

    <aside id="sidebar-multi-level-sidebar" class="hidden md:block fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 mt-14" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-200 dark:bg-gray-800 justify-between">
           <ul class="space-y-2 font-medium">
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fa-solid fa-chart-pie"></i>
                    <span class="ml-3">Dashboard</span>
                 </a>
              </li>
              <li>
                 <button type="button" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <i class="fa-brands fa-wpforms"></i>
                       <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Forms</span>
                       <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                 </button>
                 <ul id="dropdown-example" class="hidden py-2 space-y-2">
                       <li>
                        
                          <a href="{{ route('uploads.create') }}" class="gap-2 flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"><i class="fa-solid fa-plus"></i> Edit images</a>
                       </li>
                       
                 </ul>
              </li>
             

           </ul>

     

<form method="POST" action="/logout" class="">
    @csrf


    <button type="submit"
    class="mt-96 ml-2 group relative inline-flex items-center overflow-hidden rounded bg-[#212121] px-8 py-3 text-white focus:outline-none focus:ring active:bg-[#212121]"
    href="/download"
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
      Log out
    </span>
</button>
</form>
        </div>
     </aside>

    <div class="p-4 md:ml-64">
        <div class="p-4 rounded-lg dark:border-gray-700 ">
            <div class="p-4 text-gray-900 bg-white rounded-2xl shadow-xl border border-gray-100 ">
             
                <section class="py-3 font-sans">
                    <form method="POST" action="{{ route('uploads.update', $upload->id) }}" enctype="multipart/form-data">
                     
                        @csrf
                        @method('PUT')
                    <div class="md:container md:px-4 mx-auto">
                      <div class="rounded-xl">
                        <div class="md:flex md:flex-wrap  items-center justify-between -mx-4 mb-8 pb-6 border-b border-gray-400 border-opacity-20">
                          <div class="w-full sm:w-auto px-4 mb-6 sm:mb-0 sm:w-1/2 md:w-1/3 lg:w-auto">
                            <h4 class="text-2xl font-bold tracking-wide text-black mb-1">Edit images</h4>
                            <p class="text-sm text-black">Add different tourist spot</p>
                          </div>
                          <div class="w-full sm:w-auto px-4 sm:w-1/2 md:w-1/3 lg:w-auto">
                            <button type="submit" value="Save" name="submit" class="inline-flex justify-center rounded-lg bg-blue-400 py-2 px-3 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 w-full focus-visible:outline-indigo-500">Save</button>
                          </div>
                        </div>
                        
                          
                          <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                            <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                              <span class="text-sm font-medium text-black">Title of the image</span>
                            </div>
                            <div class="w-full sm:w-2/3 px-4">
                              <div class="max-w-xl">
                                <div class="flex flex-wrap items-center -mx-3">
                                  
                                  <div class="w-full sm:w-1/2 px-3">
                                    <input required placeholder="Input title" type="text" name="title"
                                    id="title" value="{{ $upload->title }}"
                                    class="mb-3 mt-1 block w-full rounded-md border-gray-500 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6" />
                                  </div>

                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                            <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                              <span class="text-sm font-medium text-black">About the image</span>
                            </div>
                            <div class="w-full sm:w-2/3 px-4">
                                <div class="mt-2">
                                    <textarea required id="about" name="about" rows="3"
                                        class="mt-1 block w-full rounded-md border-gray-500 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"
                                        style="" placeholder="Information">{{ $upload->about }}</textarea>
                                </div>
                            </div>
                          </div>

                          <div class="flex flex-wrap items-center -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                            <div class="w-full sm:w-1/3 px-4 mb-4 sm:mb-0">
                              <span class="text-sm font-medium text-black">Select Category</span>
                            </div>
                            <div class="w-full sm:w-2/3 px-4">
                              <div class="max-w-xl">
                               
                                 
                                  <select required id="category" name="category"
                                  class="mb-3 mt-1 block w-full rounded-md border-gray-500 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6">
                                  <option value="Mountain">Mountain</option>
                                  <option value="Cave">Cave</option>
                                  <option value="Beach">Beach</option>
                                  <option value="Forest">Forest</option>
                                  <option value="Cities">City</option>
                              </select>
                               
                              </div>
                            </div>
                          </div>

                          <div class="flex flex-wrap items-start -mx-4 pb-8 mb-8 border-b border-gray-400 border-opacity-20">
                            <div class="w-full sm:w-1/3 px-4 mb-6 sm:mb-0">
                              <span class="block text-sm font-medium text-black">Photo</span>
                              <span class="text-xs text-gray-400">Lorem ipsum dolor sit amet</span>
                            </div>
                            <div class="w-full sm:w-2/3 px-4">
                              <div class="flex flex-wrap sm:flex-nowrap max-w-xl">
                                <div class="flex-shrink-0 w-20 h-20 mb-4 mr-4 rounded-full">
                                  <img src="trizzle-assets/images/avatar-photo-form.png" alt="">
                                </div>
                                <div class="w-full py-8 px-4 text-center border-dashed border border-gray-400 hover:border-white focus:border-green-500 rounded-lg">
                                  <div class="relative group h-14 w-14 mx-auto mb-4">
                                    <div class="flex items-center justify-center h-14 w-14 bg-blue-500 group-hover:bg-blue-600 rounded-full">
                                      <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.71 5.71002L9 3.41002V13C9 13.2652 9.10536 13.5196 9.29289 13.7071C9.48043 13.8947 9.73478 14 10 14C10.2652 14 10.5196 13.8947 10.7071 13.7071C10.8946 13.5196 11 13.2652 11 13V3.41002L13.29 5.71002C13.383 5.80375 13.4936 5.87814 13.6154 5.92891C13.7373 5.97968 13.868 6.00582 14 6.00582C14.132 6.00582 14.2627 5.97968 14.3846 5.92891C14.5064 5.87814 14.617 5.80375 14.71 5.71002C14.8037 5.61706 14.8781 5.50645 14.9289 5.3846C14.9797 5.26274 15.0058 5.13203 15.0058 5.00002C15.0058 4.86801 14.9797 4.7373 14.9289 4.61544C14.8781 4.49358 14.8037 4.38298 14.71 4.29002L10.71 0.290018C10.6149 0.198978 10.5028 0.127613 10.38 0.0800184C10.1365 -0.0199996 9.86346 -0.0199996 9.62 0.0800184C9.49725 0.127613 9.3851 0.198978 9.29 0.290018L5.29 4.29002C5.19676 4.38326 5.1228 4.49395 5.07234 4.61577C5.02188 4.73759 4.99591 4.86816 4.99591 5.00002C4.99591 5.13188 5.02188 5.26245 5.07234 5.38427C5.1228 5.50609 5.19676 5.61678 5.29 5.71002C5.38324 5.80326 5.49393 5.87722 5.61575 5.92768C5.73757 5.97814 5.86814 6.00411 6 6.00411C6.13186 6.00411 6.26243 5.97814 6.38425 5.92768C6.50607 5.87722 6.61676 5.80326 6.71 5.71002ZM19 10C18.7348 10 18.4804 10.1054 18.2929 10.2929C18.1054 10.4804 18 10.7348 18 11V17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8947 17.2652 18 17 18H3C2.73478 18 2.48043 17.8947 2.29289 17.7071C2.10536 17.5196 2 17.2652 2 17V11C2 10.7348 1.89464 10.4804 1.70711 10.2929C1.51957 10.1054 1.26522 10 1 10C0.734784 10 0.48043 10.1054 0.292893 10.2929C0.105357 10.4804 0 10.7348 0 11V17C0 17.7957 0.316071 18.5587 0.87868 19.1213C1.44129 19.6839 2.20435 20 3 20H17C17.7956 20 18.5587 19.6839 19.1213 19.1213C19.6839 18.5587 20 17.7957 20 17V11C20 10.7348 19.8946 10.4804 19.7071 10.2929C19.5196 10.1054 19.2652 10 19 10Z" fill="#E8EDFF"></path>
                                      </svg>
                                    </div>
                                    <input type="file" name="image" id="image" class="absolute top-0 left-0 h-14 w-14 opacity-0 cursor-pointer flex justify-center text-sm" onchange="loadFile(event)" accept="image/jpeg, image/png, image/gif"  size="10000000" >
                                    
                                  </div>
                                  <p class="font-semibold leading-normal mb-1">
                                    <span class="text-blue-500">Click to upload a file</span>
                                    <span class="text-black">or drag and drop</span>
                                  </p>
                                  <span class="text-xs text-black font-semibold">PNG, JPG, GIF or up to 10MB</span>
                                </div>
                                <img id="output" class="mt-5 flex mx-auto justify-center items-center rounded-lg " 
                                    src="{{ $upload->image }}" alt="">
                              </div>

                              
                            </div>
                          </div>

                     
                      </div>
                    </div>
                </form>
                  </section>

            </div>
           
         
       



        </div>
    </div>
    <div id="drawer-navigation"
    class="fixed top-0 mt-16 left-0 z-50 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800"
    tabindex="-1" aria-labelledby="drawer-navigation-label">
   <img src="../../img/ph.png" alt="">
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

            
            @else
          

            @endauth
            <div class="h-full px-3 py-4 overflow-y-auto  dark:bg-gray-800 justify-between">
                <ul class="space-y-2 font-medium">
                   <li>
                      <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                         <i class="fa-solid fa-chart-pie"></i>
                         <span class="ml-3">Dashboard</span>
                      </a>
                   </li>
                   <li>
                      <a type="button" href="{{ route('uploads.create') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <i class="fa-solid fa-plus"></i>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Edit images</span>
                      </a>
                    
                   </li>
                  
     
                </ul>
     
          
     
     <form method="POST" action="/logout" class="">
         @csrf
     
     
         <button type="submit"
         class="mt-40 ml-2 group relative inline-flex items-center overflow-hidden rounded bg-[#212121] px-8 py-3 text-white focus:outline-none focus:ring active:bg-[#212121]"
         href="/download"
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
           Log out
         </span>
     </button>
     </form>
             </div>
        </ul>


    </div>
</div>



</body>
<!-- plugin for scrollbar  -->
<script src="../../assets/js/plugins/perfect-scrollbar.min.js " async></script>
<script async defer src="https://buttons.github.io/buttons.js "></script>
<script src="../../assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4 " async></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script src="../../js/alert.js " async></script>
</html>