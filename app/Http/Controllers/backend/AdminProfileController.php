<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = Auth::user();
        return view('backend.profile.index', compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filename = time() . '.' . $request->img->extension();
        $data = $request->all();
        $data['img'] = $filename;

        if (User::create($data)) {
            $request->img->move('uploads', $filename);
            return back();
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
        $profile = User::find(Auth::id());
        return view('backend.profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $admin = User::find($id);
        $data = $request->all();

        if ($request->hasFile('img')) {
            $filename = time() . '.' . $request->img->extension();
            $data['img'] = $filename;
            $request->img->move('uploads', $filename);
        }
        // dd($data);
        if ($admin->update($data)) {
            return back()->with('msg', 'Successfully Updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
