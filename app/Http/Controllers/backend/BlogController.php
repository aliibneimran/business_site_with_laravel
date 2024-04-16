<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('backend.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filename = time(). '.' . $request->img->extension();
        $data = $request->all();
        $data['img'] = $filename;
        $data['date'] = NOW();
        $data['author'] = Auth::user()->name;

        // dd($data);
        if (Blog::create($data)) {
            $request->img->move('uploads', $filename);
            return back()->with('msg', 'Blog Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $blog = Blog::find($id);
        // return view('frontend.blog_details', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::find($id);
        return view('backend.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = Blog::find($id);
        $data = $request->all();
        if ($request->hasFile('img')) {
            $filename = time(). '.' . $request->img->extension();
            $data['img'] = $filename;
            $request->img->move('uploads', $filename);
        }
        if ($blog->update($data)) {
            return back()->with('msg', 'Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return back()->with('msg', 'Deleted Successfully');
    }
}
