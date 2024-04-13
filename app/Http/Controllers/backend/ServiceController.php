<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('backend.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filename = time(). '.' . $request->img->extension();
        $data = $request->all();
        $data['img'] = $filename;
        if (Service::create($data)) {
            $request->img->move('uploads', $filename);
            return back()->with('msg', 'Service added successfully');
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
        $service = Service::find($id);
        return view('backend.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Service::find($id);
        $data = $request->all();

        if ($request->hasFile('img')) {
            $filename = time(). '.' . $request->img->extension();
            $data['img'] = $filename;
            $request->img->move('uploads', $filename);
        }
        if ($service->update($data)) {
            return back()->with('msg', 'Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id);
        $service->delete();
        return back()->with('msg', 'Deleted Successfully');
    }
}
