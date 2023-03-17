<?php

use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/index', function () {
    return view ('index');
});

Route::get('/login', function (){
return view ('login');
});

Route::get('/dashboard', function (){
    return view ('dashboard');
});

Route::get('/table', function (){
    return view ('table');
});
    


// Route::get('home',function(){
//     return view('welcome');
// });

// Route::get('home2',function(){
//     return view('home2');
// });

// Route::get('/LandingPage/{id}/{Fruits}', function($id, $Fruits){
// return response ($id.'-'.$Fruits, 200);
 

// });

// Route::get('/req-json', function(){
//     return response()->json(['name','panot']);
// });

// Route::get('/sar/{id}', function($id){
// return response($id, 200);

// });

// Route::get('/panot/{ikaw}/{supot}', function($ikaw, $supot){
// return response($ikaw.'-'.$supot , 200);

// });