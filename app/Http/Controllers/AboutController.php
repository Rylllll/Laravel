<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function how(){
        return view('how');
    }
}


