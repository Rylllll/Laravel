<?php

namespace App\Http\Controllers;
use App\Models\upload;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function index(){
        $display = upload::paginate();
        return view('gallery', ['display' => $display]);
    }
}
