<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../img/Logo.png" />
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
    @include('sweetalert::alert')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/730a8ae355.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Wonders Dashboard/Tables</title>
 
   
</head>



<body class="font-sans">

    {{-- <button x-data="topBtn" @click="scrolltoTop" id="topButton"
        class="fixed z-10 hidden p-3 bg-blue-400 rounded-full shadow-md bottom-10 right-10 animate-bounce">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18">
            </path>
        </svg>
    </button> --}}

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
                        <img src="../img/ph.png" class="h-8 mr-3" alt="FlowBite Logo" />

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
    <div class="bg-gray-100 font-sans px-7">
        <nav class="container flex  mx-auto py-3 text-gray-700 bg-gray-100 dark:bg-gray-800 dark:border-gray-700 md:mt-16 justify-left md:justify-end w-full"
            aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3 gap-1">
                <li class="inline-flex items-center">
                    <a href="/"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <i class="fa-solid fa-house text-black"></i>
                    </a>
                </li>
                <li>
                    <div class="flex items-center gap-1 ">
                        <i class="fa-solid fa-angle-right text-black text-xs"></i>
                        <p
                            class="ml-1 text-sm font-medium text-[#03a9f4]  md:ml-2 dark:text-gray-400 dark:hover:text-white">
                            Dashboard</p>
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
                        
                          <a href="{{ route('uploads.create') }}" class="gap-2 flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"><i class="fa-solid fa-plus"></i> Add images</a>
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
            <div class="md:grid grid-cols-3 gap-4 mb-4">
                <div
                    class="block shadow-indigo-100 rounded-xl border border-gray-100 p-4 shadow-xl bg-white font-sans  mb-4">
                    <img alt="Home" src="../img/user.jpg" class="h-56 w-full rounded-md object-cover" />

                    <div class="mt-2">
                        <dl>
                            <div>


                                <div>
                                    <dt class="sr-only">Address</dt>

                                    <dd class="text-center font-bold text-black">Number of Users account</dd>
                                </div>
                        </dl>

                        <div class="mt-6 flex items-center gap-8 text-xs justify-center">

                            <h1 class="sm:text-9xl text-8xl ">{{ $userCount }}</h1>

                        </div>
                    </div>
                </div>

                <div
                    class="block shadow-indigo-100 rounded-xl border border-gray-100 p-4 shadow-xl bg-white font-sans mb-4" >
                    <img alt="Home" src="../img/garden.jpg" class="h-56 w-full rounded-md object-cover" />

                    <div class="mt-2">
                        <dl>
                            <div>


                                <div>
                                    <dt class="sr-only">Address</dt>

                                    <dd class="text-center font-bold text-black">Number of Images</dd>
                                </div>
                        </dl>

                        <div class="mt-6 flex items-center gap-8 text-xs justify-center">

                            <h1 class="sm:text-9xl text-8xl ">{{ $count }}</h1>

                        </div>
                    </div>
                </div>

                <div
                    class="block shadow-indigo-100 rounded-xl border border-gray-100 p-4 shadow-xl bg-white font-sans mb-4">
                    <img alt="Home" src="../img/women.jpg" class="h-56 w-full rounded-md object-cover" />

                    <div class="mt-2">
                        <dl>
                            <div>


                                <div>
                                    <dt class="sr-only">Address</dt>

                                    <dd class="text-center font-bold text-black">Travel the world</dd>
                                </div>
                        </dl>

                        <div class="mt-6 flex items-center gap-8 text-xs justify-center text-center">

                            <h1 class=" text-sm "> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae
                                dolores, possimus pariatur animi temporibus nesciunt praesentium dolore
                                sed nulla ipsum eveniet corporis quidem, mollitia itaque minus soluta,
                                voluptates neque explicabo tempora nisi culpa eius atque dignissimos.
                                Molestias explicabo corporis voluptatem?</h1>

                        </div>
                    </div>
                </div>


            </div>
            <div class="p-4 left-0 flex justify-between">
                <h1 class="text-xl font-bold">Wonders Table</h1>
                <a href="{{ route('uploads.create') }}"
                class="inline-block rounded bg-[#212121] cursor-pointer px-8 py-3 text-sm font-medium text-white transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:bg-indigo-500">
                <i class="fa-solid fa-plus"></i> Add Image
            </a>
            </div>
            <div class="p-4 text-gray-900 bg-white rounded-2xl shadow-xl border border-gray-100 ">
                <div class="flex items-center font-sans ">
                    <div class="sm:max-h-screen sm:overflow-x-auto">
                        <table class="p-6 text-md bg-white font-sans ">
                            <thead class="bg-gray-100 rounded-2xl ">
                                <th class="text-left p-3 px-5 text-[#424242]">Title </th>
                                <th class="text-left p-3 md:block px-5 text-[#424242] hidden  lg:flex">About</th>
                                <th class="text-left p-3 px-5 text-[#424242]">Category</th>
                                <th class="text-left p-3 px-5 text-[#424242]">Image</th>
                                <th class="text-center p-3 px-5 text-[#424242]">Action</th>

                            </thead>
                            <tbody>
                                @foreach ($uploader as $item)
                                    <tr class="border-b  ">
                                        <td class="p-3 px-5 font-sans hidden"> {{ $item->id }}</td>
                                        <td class="p-3 px-5 font-sans"> {{ $item->title }}</td>
                                        <td class="p-3 px-5 font-sans text-sm md:text-lg hidden lg:flex mx-auto justify-center items-center">
                                            {{ substr($item->about, 0, 60) }}{{ strlen($item->about) > 250 ? '...' : '' }}
                                        </td>
                                        <td class="p-3 px-5 font-sans"> {{ $item->category }}</td>
                                        <td class="p-3 px-5 font-sans">
                                            <img src="{{ $item->image }}" width='100' height='100'
                                                class="img img-responsive rounded-lg" />
                                        </td>
                                        <td class="p-3 px-5 flex mx-auto justify-center items-center">
                                            <div
                                                class="inline-flex rounded-lg border border-gray-100 bg-gray-100 p-1 ">
                                                <a href="{{ route('uploads.edit', $item->id) }}">
                                                    <button
                                                        class="inline-flex items-center gap-2 rounded-md px-4 py-2 text-sm text-gray-500 hover:text-gray-700 focus:relative">

                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="h-4 w-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg>


                                                        Edit

                                                    </button>
                                                </a>

                                                <form method="POST"
                                                    action="{{ route('uploads.destroy', ['id' => $item->id]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        class="inline-flex items-center gap-2 rounded-md bg-white hover:bg-red-500 px-4 py-2 text-sm text-red-500 shadow-sm focus:relative"
                                                        type="submit"
                                                        onclick="event.preventDefault(); 
                                                    Swal.fire({
                                                        title: 'Are you sure?',
                                                        text: 'You will not be able to recover this file!',
                                                        icon: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonText: 'Yes, delete it!',
                                                        cancelButtonText: 'No, cancel!',
                                                        reverseButtons: true
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {
                                                            // Submit the form
                                                            this.form.submit();
                                                        } else if (result.dismiss === Swal.DismissReason.cancel) {
                                                            Swal.fire(
                                                                'Cancelled',
                                                                'Your file is safe :)',
                                                                'info'
                                                            )
                                                        }
                                                    });">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="h-4 w-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                        </svg>
                                                        Delete
                                                    </button>
                                                </form>


                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
            {{ $uploader->appends(request()->input())->links() }}



        </div>
    </div>
    <div id="drawer-navigation"
    class="fixed top-0 mt-16 left-0 z-50 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800"
    tabindex="-1" aria-labelledby="drawer-navigation-label">
   <img src="../img/ph.png" alt="">
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
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Add images</span>
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
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js " async></script>
<script src="../js/modal.js " async></script>
<script src="../js/alert.js " async></script>


</html>
