<?php

namespace App\Http\Controllers;
use App\Models\upload;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        $home = upload::take(6)->get();
        return view('/index', ['home' => $home]);
    }
    
}
