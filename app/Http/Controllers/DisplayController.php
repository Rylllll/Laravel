<?php

namespace App\Http\Controllers;
use App\Models\upload;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function index(){
        $homes = upload::all();
        $home = upload::latest()->take(6)->get();
        return view('/gallery', ['home' => $home], ['homes' => $homes]);
    }
    
    public function show($id)
    {
        $upload = Upload::findOrFail($id);
        return view('/gallview', compact('upload'));
    }
    
    public function searchPlaces(Request $request){
        if ($request->search){
           
            $searchPlaces = Upload::where('title','LIKE', '%' .$request->search. '%')->latest()->get();
            return view ('/search', compact('searchPlaces'));

        }

        else{

            return redirect()->back()->with('message'.'Empty search');
        }


    }
}
