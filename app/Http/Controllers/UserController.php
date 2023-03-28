<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\upload;
use Illuminate\Http\Request;

class UserController extends Controller
{
 
 public function count(){
    $count = Upload::count();
    return view('uploader.table')->with('counts', $count);
 }
    
}
