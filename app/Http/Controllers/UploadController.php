<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\upload;
use App\Models\User;
use DB;
class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
  
       if (auth()->user()?->email != 'reymark.boquiron123@gmail.com'){
        abort(403);
       }


       $userCount = User::count(); 
        $uploads = Upload::paginate(10); 
        $count = Upload::count();
        return view('uploader.table')->with('uploader', $uploads)->with('count', $count)->with('userCount', $userCount);
    }
    public function add()
    {
       
        
        return view('uploader.add');
    }
    

   
    public function store(Request $request)
{
    if ($request->hasFile('image') && $request->file('image')->isValid() && strpos($request->file('image')->getMimeType(), "image/") !== false) {
        $requestData = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $requestData["image"] = '/storage/'.$path;
        upload::create($requestData);
        return redirect('uploads')->with('flash_message', 'Photo added');
    } else {
        return redirect()->back()->withErrors(['image' => 'The uploaded file is not a valid image.']);
    }
}


  
    public function show(string $id)
    {
        //
    }

    
  public function destroy(string $id)
{
    $upload = Upload::findOrFail($id); 
    $upload->delete(); 
    $uploads = Upload::paginate(10); 
    $count = Upload::count();
    return redirect('uploads')->with('uploader', $uploads)->with('count', $count)->with('flash_message', 'Photo deleted');
}


public function edit_controller($id){


}
 
public function create(){
    if (auth()->user()?->email != 'reymark.boquiron123@gmail.com'){
        abort(403);
       }

    return view('uploader.create');
}
public function category($category)
{
    $images = Upload::where('category', $category)->get();
    $count = count($images);
    return view('uploader.category', compact('images', 'category', 'count'));
}

public function edit($id)
{
    $upload = Upload::findOrFail($id);
    return view('uploader.edit', compact('upload'));
}

public function update(Request $request, $id)
{
    $upload = Upload::findOrFail($id);

    if ($request->hasFile('image')) {
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $fileName, 'public');
        $upload->image = '/storage/'.$path;
    }

    $upload->title = $request->input('title');
    $upload->about = $request->input('about');
    $upload->category = $request->input('category');
    $upload->save();

    return redirect('uploads')->with('flash_message', 'Photo updated');
}




}


