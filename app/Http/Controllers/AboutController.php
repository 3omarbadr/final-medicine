<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $contacts = ContactForm::all();

        return view('web.About', compact('contacts'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'position' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        ContactForm::create($validatedData);
    
        return to_route('web.about.index')->with('success','Your message received successfully');
    }
}
