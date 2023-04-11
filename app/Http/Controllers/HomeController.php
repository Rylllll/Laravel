<?php

namespace App\Http\Controllers;
use App\Models\upload;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $taked = upload::latest()->take(1)->get();
        $takes = upload::latest()->take(6)->get();
        $take = upload::inRandomOrder()->take(4)->get();
        $home = upload::latest()->take(6)->get();
        return view('index', [
            'home' => $home,
            'take' => $take,
            'takes' => $takes,
            'taked' => $taked
        ]);
    }
    
    
    
}
