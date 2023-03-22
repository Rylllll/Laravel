<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        return view('post.create');  

        if(auth()->guest()){
            return redirect('/')->with('success', 'Goodbye!');

        }
        if(auth()->user()->username != 'reymarkgen123'){
          
            abort(403);
        }
    }
}
