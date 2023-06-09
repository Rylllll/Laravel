<?php

namespace App\Http\Controllers;
use App\Models\upload;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function index()
    {
        $homes = upload::all();
        $home = upload::latest()->take(6)->get();
        $count = upload::count();
        $data = [
            'home' => $home,
            'homes' => $homes,
            'count' => $count,
        ];
        return view('gallery', $data);
    }
    
    
    public function show($id)
    {
        $upload = Upload::findOrFail($id);
        return view('/gallview', compact('upload'));
    }
    
    public function searchPlaces(Request $request){
        if ($request->search){
           
            $searchPlaces = Upload::where('title','LIKE', '%' .$request->search. '%')
            ->orwhere('about','LIKE', '%' .$request->search. '%')
            ->orwhere('category','LIKE', '%' .$request->search. '%')
            ->orderBy('category', 'asc')
            ->orderBy('title', 'asc')
            ->latest()->get();

            return view ('/search', compact('searchPlaces'));

        }

        else{

            return redirect()->back()->with('message'.'Empty search');
        }


    }

public function searchPlacesAjax(Request $request)
{

    
    $places = Upload::where('title', 'LIKE', '%' . $request->search . '%')
    ->orwhere('about','LIKE', '%' .$request->search. '%')
            ->orwhere('category','LIKE', '%' .$request->search. '%')
            ->orderBy('category', 'asc')
            ->orderBy('title', 'asc')
    ->get();
 

    $data = [];

    foreach ($places as $item) {
        $data[] = [
            'label' => $item['title'],
            'url' => route('display.show', ['id' => $item->id])
        ];
    }

    return $data;
}

}
