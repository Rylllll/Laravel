<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\upload;
class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $upload = upload::all();
        return view ('post.index')->with('post', $upload);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $requestData = $request->all();
            $fileName = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $fileName, 'public');
            $requestData["image"] = '/storage/'.$path;
            upload::create($requestData);
            return redirect('admin/index')->with('flash_message', 'Photo added');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
