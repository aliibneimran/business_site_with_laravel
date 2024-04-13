<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $glry = Gallery::all();
        return view('backend.gallery.index', compact('glry'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cats = Category::all();
        return view('backend.gallery.create', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filename = time(). '.' . $request->img->extension();
        $data = $request->all();
        $data['img'] = $filename;
        
        if (Gallery::create($data)) {
            $request->img->move('uploads', $filename);
            return back()->with('msg', 'Gallery added successfully');
        };
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
        $glry = Gallery::find($id);
        $cats = Category::all();
        return view('backend.gallery.edit', compact('glry', 'cats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $glry = Gallery::find($id);
        $data = $request->all();

        if ($request->hasFile('img')) {
            $filename = time() . '.' . $request->img->extension();
            $data['img'] = $filename;
            $request->img->move('uploads', $filename);
        }

        if ($glry->update($data)) {
            return back()->with('msg', 'Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $glry = Gallery::find($id);
        $glry->delete();
        return back()->with('Deleted Successfully');
    }
}
