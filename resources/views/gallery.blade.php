@extends('layouts.master')
@section('content')

<body>
    

<section>
 


<div class="flex items-center justify-center py-4 md:py-8 flex-wrap mt-56">
    <button type="button" class="text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base px-5 py-2.5 text-center mr-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">All categories</button>
    <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-gray-800">Shoes</button>
    <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-gray-800">Bags</button>
    <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-gray-800">Electronics</button>
    <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base px-5 py-2.5 text-center mr-3 mb-3 dark:text-white dark:focus:ring-gray-800">Gaming</button>
</div>

<div class="grid grid-cols-2 gap-4 p-4 md:grid-cols-3 2xl:mx-auto 2xl:container lg:px-20 lg:py-16 md:py-12 md:px-6 py-9 px-4 w-96 sm:w-auto">

  @foreach ($display as $item)
  <div class="grid-container">
  <div class="grid shadow-2xl">
 
<a href="#" class="group relative grid bg-black rounded-2xl ">
    <img
      alt="Developer"
      src=" {{$item->image}}"
      class="absolute inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50 rounded-2xl "
    />
  
    <div class="relative p-4 sm:p-6 lg:p-8">
      <p class="text-sm font-medium uppercase tracking-widest text-pink-500">
      Albums
      </p>
  
      <p class="text-xl font-bold text-white sm:text-2xl"> {{$item->title}}</p>
  
      <div class="mt-32 sm:mt-48 lg:mt-64">
        <div
          class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
        >
          <p class="text-sm text-white">
    {{$item->about}}
          </p>
        </div>
      </div>
    </div>
  </a>
  
</div>
      
  </div>
  @endforeach


  </div>
  



                
               
            
           
            </section>
            
        </body>
      
</section>