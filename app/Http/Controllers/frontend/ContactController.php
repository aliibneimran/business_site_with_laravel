<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $messages = Contact::get();
        return view('backend.message',compact('messages'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // Validate form data (optional)
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Create a new message instance
        if($validatedData){
            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ]);        
        }
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
