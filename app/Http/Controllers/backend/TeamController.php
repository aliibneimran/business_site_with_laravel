<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team = Team::all();
        return view('backend.team.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filename = time().'.'. $request->img->extension();
        $data = [
            'name' => $request->name,
            'designation' => $request->designation,
            'img' => $filename,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'status' => $request->status,
        ];
        if (Team::create($data)) {
            $request->img->move('uploads', $filename);
            return redirect()->back()->with('msg', 'Member added successfully');
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
        $team = Team::find($id);
        return view('backend.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        
        $team = Team::find($id);
        if ($request->hasFile('img')) {
            $filename = time(). '.' . $request->img->extension();
            $data['img'] = $filename;
            $request->img->move('uploads', $filename);
        }
        if ($team->update($data)) {
            return back()->with('msg', 'Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::find($id);
        $team->delete();
        return back()->with('msg', 'Deleted Successfully');
    }
}
