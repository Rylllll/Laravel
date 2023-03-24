<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
 
 public function count(){
    $count = User::count();
    return view('uploader.table')->with('counts', $count);
 }
    
}
