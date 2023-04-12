<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;


Route::get('/display/{id}', [DisplayController::class, 'show'])->name('display.show');
Route::resource("/uploads", UploadController::class);
Route::get('search', [DisplayController::class, 'searchPlaces'])->name('search.search');
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
Route::get('/gallery', [DisplayController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/uploads/{category}/category',  [UploadController::class, 'category'])->name('uploads.category');
Route::delete('uploads/{id}', 'UploadController@destroy')->name('uploads.destroy');
Route::get('/uploads/{id}/edit', 'UploadController@edit')->name('uploads.edit');
Route::put('/uploads/{id}', 'UploadController@update')->name('uploads.update');





