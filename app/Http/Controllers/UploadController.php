<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\upload;
use DB;
class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $uploads = Upload::paginate(10); 
        $count = Upload::count();
        return view('uploader.table')->with('uploader', $uploads)->with('count', $count);
    }
    

   
    // public function index()
    // {
    //     // Select the columns that you want from the database
    //     $uploads = Upload::select('title', 'about', 'image')
    //                 ->paginate(10); 
    //     $count = Upload::count();
    //     return view('uploader.table')->with('uploader', $uploads)->with('count', $count);
    // }
    
   
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $requestData = $request->all();
            $fileName = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $fileName, 'public');
            $requestData["image"] = '/storage/'.$path;
            upload::create($requestData);
            return redirect('uploads')->with('flash_message', 'Photo added');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     $edits = DB::select('select * from student where id = ?', [$id]);
    //     return view('uploader.table', ['edits'=>$edits]);
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
  public function destroy(string $id)
{
    $upload = Upload::findOrFail($id); // Find the upload by id or throw an exception
    $upload->delete(); // Delete the upload
    $uploads = Upload::paginate(10); // Get all the uploads to display in the view
    $count = Upload::count();
    return view('uploader.table')->with('uploader', $uploads)->with('count', $count)->with('flash_message', 'Photo deleted');
}

public function update(Request $request, $id){
    $images = Upload::find($id);
    return view('/uploader.table', compact('uploads'));
}

public function edit_controller($id){


}
    
}
