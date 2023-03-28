<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../img/Logo.png" />
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

    <aside class="sm:hidden max-w-62.5 ease-nav-brand fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-2xl transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent" id="nav">
        <div class="h-19.5 ">
            <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
            <a class="block px-8 py-6 m-0 mx-auto text-xl whitespace-nowrap text-slate-700 font-sans" href="./index.html" target="_blank">
                <img src="../img/Logo.png" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
                <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">7Wonders</span>
            </a>
        </div>


        <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

        <nav aria-label="Main Nav" class="flex flex-col space-y-1 p-4 h-sidenav">
          <a
            href=""
            class="flex items-center gap-2 rounded-lg bg-black px-4 py-2 text-white"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 opacity-75"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
              />
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
              />
            </svg>
        
            <span class="text-sm font-medium"> Dashboard </span>
          </a>
        
          <details class="group [&_summary::-webkit-details-marker]:hidden">
            <summary
              class="group flex items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700"
            >
              <div class="flex items-center gap-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5 opacity-75"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="2"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
                  />
                </svg>
        
                <span class="text-sm font-medium"> Users </span>
              </div>
        
              <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  />
                </svg>
              </span>
            </summary>
        
            <nav aria-label="Users Nav" class="mt-2 flex flex-col space-y-1 px-4 sm:hidden">
              <a
                href=""
                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
              >
                Accounts
              </a>
        
          
            </nav>
          </details>
        
          <a
            href=""
            class="flex items-center gap-2 rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 opacity-75"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"
              />
            </svg>
        
            <span class="text-sm font-medium"> Billing </span>
          </a>
        
          <a
            href=""
            class="flex items-center gap-2 rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5 opacity-75"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
              stroke-width="2"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"
              />
            </svg>
        
            <span class="text-sm font-medium"> Invoices </span>
          </a>
        
          <details class="group [&_summary::-webkit-details-marker]:hidden">
            <summary
              class="group flex items-center justify-between rounded-lg px-4 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700"
            >
              <div class="flex items-center gap-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5 opacity-75"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="2"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                  />
                </svg>
        
                <span class="text-sm font-medium"> Account </span>
              </div>
        
              <span class="shrink-0 transition duration-300 group-open:-rotate-180">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  />
                </svg>
              </span>
            </summary>
        
            <nav aria-label="Account Nav" class="mt-2 flex flex-col space-y-1 px-4">
              <a
                href=""
                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
              >
                Details
              </a>
        
              <a
                href=""
                class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
              >
                Security
              </a>
              <form method="POST" action="/logout" class="">
                @csrf

                
                <button
                  type="submit"
                  class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700"
                >
                  Logout
                </button>
            </form>
           
            </nav>
          </details>
        </nav>
        
    </aside>

    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
        <!-- Navbar -->
        <nav class="flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start bg-white shadow-xl mt-4" navbar-main navbar-scroll="true">
            <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
                <nav>
                    <!-- breadcrumb -->
                    <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                        <li class="leading-normal text-sm">
                            <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
                        </li>
                        <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="mb-0 font-bold capitalize">Tables</h6>
                </nav>

                <div class="flex justify-between space-x-2">
                  @auth
                  <span class="p-4 font-bold uppercase">Welcome, {{ auth()->user()->name }}!</span>
    
                  <form method="POST" action="/logout" class="text-xs font-semibold text-blue-500 ml-6">
                      @csrf
    <div class="p-2">
                      <a
                      class="inline-block rounded bg-black cursor-pointer px-8 py-3 text-sm font-medium text-white transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:bg-indigo-500"
                    
                      onclick="openModal()" >
                    <i class="fa-solid fa-plus"></i> Create
                    </a>
</div>
                  

 
                  </form>
              @else
                  
                  {{-- <a  href="/register" class="group relative inline-block overflow-hidden border border-[#212121] px-8 py-3 focus:outline-none focus:ring" href="/download">
                    <span class="absolute inset-x-0 bottom-0 h-[2px] bg-[#212121] transition-all group-hover:h-full group-active:bg-[#212121]"></span>
               
                    <span class="relative text-sm font-medium text-[#212121] transition-colors group-hover:text-white">
                
                    Register
                    </span></a>
                  <a  id="navbar-login-btn" href="{{URL::to('login')}}" class="group relative inline-block overflow-hidden border border-[#212121] px-8 py-3 focus:outline-none focus:ring" href="/download">
                    <span class="absolute inset-x-0 bottom-0 h-[2px] bg-[#212121] transition-all group-hover:h-full group-active:bg-[#212121]"></span>
               
                    <span class="relative text-sm font-medium text-[#212121] transition-colors group-hover:text-white">
             
                    Login
                    </span></a> --}}
              @endauth
                    
                    
                    <a id="navbar" name="user" href="#" class="text-[#212121]"></a>
                </div>
            </div>
        </nav>



<div class="flex gap-3 p-4 mt-10">
  
  <a href="#" class="block shadow-indigo-100 rounded-xl border border-gray-100 p-4 shadow-xl bg-white">
  <img
    alt="Home"
src="../img/user.jpg"
    class="h-56 w-full rounded-md object-cover"
  />

  <div class="mt-2">
    <dl>
      <div>
      

      <div>
        <dt class="sr-only">Address</dt>

        <dd class="font-bold text-black">Number of Users</dd>
      </div>
    </dl>

    <div class="mt-6 flex items-center gap-8 text-xs">
   
<h1 class="sm:text-9xl text-8xl ">{{$count}}</h1>
    
    </div>
  </div>
</a>

<a href="#" class="block shadow-indigo-100 rounded-xl border border-gray-100 p-4 shadow-xl bg-white">
  <img
    alt="Home"
src="../img/garden.jpg"
    class="h-56 w-full rounded-md object-cover"
  />

  <div class="mt-2">
    <dl>
      <div>
      

      <div>
        <dt class="sr-only">Address</dt>

        <dd class="font-medium text-black">Number of Images</dd>
      </div>
    </dl>

    <div class="mt-6 flex items-center gap-8 text-xs">
   
<h1 class="sm:text-9xl text-8xl">{{$count}}</h1>
    
    </div>
  </div>
</a>
 

 
<article class="group bg-white rounded-2xl shadow-2xl w-1/2">
  <img
    alt="Lava"
    src="../img/women.jpg"
    class="h-56 w-full rounded-xl object-cover shadow-xl transition group-hover:grayscale-[50%]"
  />

  <div class="p-4 bg-white">
    <a href="#">
      <h3 class="text-lg font-medium text-gray-900">
        Travel the world
      </h3>
    </a>

    <p class="mt-5 text-sm leading-relaxed text-gray-500 line-clamp-3">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae
      dolores, possimus pariatur animi temporibus nesciunt praesentium dolore
      sed nulla ipsum eveniet corporis quidem, mollitia itaque minus soluta,
      voluptates neque explicabo tempora nisi culpa eius atque dignissimos.
      Molestias explicabo corporis voluptatem?
    </p>
  </div>
</article>

      
</div>
        
<div class="p-4 mt-10">

<div class="p-4 text-gray-900 bg-white rounded-2xl shadow-xl">
  <div class="p-4 flex">
    <h1 class="text-xl font-bold">Images Table</h1>

    <div class="flex items-center md:ml-auto md:pr-4">
      <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
          <span class="text-sm ease-soft leading-5.6 absolute z-10 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
      <i class="fas fa-search" aria-hidden="true"></i>
    </span>
          <input type="text" class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow"
              placeholder="Type here..." />
      </div>
  </div>
  </div>
  <div class="flex justify-center items-center overflow-x-auto overflow-y-auto">
      <table class="p-6 text-md bg-white font-sans">
        <thead class="border b border-black">
          <th class="text-left p-3 px-5 text-[#424242]">Title </th>
          <th class="text-left p-3 px-5 text-[#424242]">About</th>
          <th class="text-left p-3 px-5 text-[#424242]">Image</th>
          <th class="text-center p-3 px-5 text-[#424242]">Action</th>
          
      </thead>
          <tbody>
            @foreach($uploader as $item)
          
              
              <tr class="border-b  ">
                  <td class="p-3 px-5 font-sans"> {{ $item->title }}</td>
                  <td class="p-3 px-5 font-sans md:w-1/2">{{ $item->about }}</td>
                  <td class="p-3 px-5 font-sans">
                    <img src="{{ asset($item->image) }}" width= '100' height='100' class="img img-responsive rounded-lg" />
                  </td>
                  <td class="p-3 px-5 flex justify-center">
                    <div class="inline-flex rounded-lg border border-gray-100 bg-gray-100 p-1">
                      <button
                        class="inline-flex items-center gap-2 rounded-md px-4 py-2 text-sm text-gray-500 hover:text-gray-700 focus:relative" onclick="openModal1()">
                      
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="h-4 w-4"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"
                          />
                        </svg>
                    
                        Edit
                      </button>

                     
                      <form method="POST" action="{{ route('uploads.destroy', ['id' => $item->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button
                        class="inline-flex items-center gap-2 rounded-md bg-white hover:bg-red-500 px-4 py-2 text-sm text-red-500 shadow-sm focus:relative"
                       type="submit">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="h-4 w-4"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                          />
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
  {{$uploader->links()}}
</div>
</div>

<div id="modal" class="fixed z-10 inset-0 overflow-y-auto hidden ease-in-out duration-300">
  <div class="flex items-center justify-center min-h-screen">
    <!-- Modal overlay -->
    <div class="fixed w-full z-0 inset-0 bg-black opacity-50"></div>

    <!-- Modal content -->
    <div class="relative bg-white w-1/2 mx-auto rounded-2xl shadow-lg z-30">
      <div class="flex justify-between p-4">
       
        <div class="grid">
          <h1 class="text-3xl font-sans text-black" for="">Upload image</h1>
            
          <h2 class="text-sm font-sans text-[#424242]" for="">Upload your images here</h2>
        </div>
   
        <div class="ml-auto">
          <i class="fa-solid fa-rectangle-xmark text-4xl text-red-500 cursor-pointer transition hover:scale-110  focus:outline-none focus:ring" onclick="closeModal()"></i>
        </div>
      </div>
      
      
      <form method="POST" action="{{ url('uploads') }}" enctype="multipart/form-data">
               
        {!! csrf_field() !!}
   

            <input type="hidden" name="page" value="" id="page-input">

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

    </div>
  </div>
</div>

{{-- Modal 2---------------------------------------------------------------------------------------------------------------------------- --}}

<div id="modal1" class="fixed z-10 inset-0 overflow-y-auto hidden ease-in-out duration-300">
  <div class="flex items-center justify-center min-h-screen">
    <!-- Modal overlay -->
    <div class="fixed w-full z-0 inset-0 bg-black opacity-50"></div>

    <!-- Modal content -->
    <div class="relative bg-white w-1/2 mx-auto rounded-2xl shadow-lg z-30">
      <div class="flex justify-between p-4">
       
        <div class="grid">
          <h1 class="text-3xl font-sans text-black" for="">Edit details</h1>
            
          <h2 class="text-sm font-sans text-[#424242]" for="">Edit the images here</h2>
        </div>
   
        <div class="ml-auto">
          <i class="fa-solid fa-rectangle-xmark text-4xl text-red-500 cursor-pointer transition hover:scale-110  focus:outline-none focus:ring" onclick="closeModal1()"></i>
        </div>
      </div>
      
      @foreach($uploader as $item)

      <input type="hidden" name="page" value="{{ $item->id }}" id="page-input">
     @endforeach
      <form method="POST" action="{{ url('uploads') }}" enctype="multipart/form-data">
       
        {!! csrf_field() !!}
  
            <div class=" rounded-2xl sm:overflow-hidden sm:rounded-md">       
                <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                    <div>

                        <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Title of the image</label>
                        <input required placeholder="Input title" type="text" name="title" id="title" value="{{ $item->title }}" class="mb-3 mt-1 block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"
                        />
                        <label for="about" class="block text-sm font-medium leading-6 text-gray-900 mb-3">About (Brief description about the place or destination.)</label>
                        <div class="mt-2">
                            <textarea required id="about" name="about" rows="3"  class="mt-1 block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"
                                style="" placeholder="Information">{{ $item->about }}</textarea>
                       
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

    </div>
  </div>
</div>



    </main>
    
    <script>
        function openModal() {
    var modal = document.getElementById("modal");
    modal.classList.remove("hidden");
  }
  function closeModal() {
    var modal = document.getElementById("modal");
    modal.classList.add("hidden");
  }
    </script>

   
<script>
  function openModal1() {
var modal = document.getElementById("modal1");
modal.classList.remove("hidden");
}
function closeModal1() {
var modal = document.getElementById("modal1");
modal.classList.add("hidden");
}
</script>

</body>
<!-- plugin for scrollbar  -->
<script src="../assets/js/plugins/perfect-scrollbar.min.js " async></script>
<script async defer src="https://buttons.github.io/buttons.js "></script>
<script src="../assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4 " async></script>


</html>