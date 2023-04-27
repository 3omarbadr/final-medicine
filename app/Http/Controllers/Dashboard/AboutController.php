<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $contacts = ContactForm::all();

        return view('dashboard.about.index', compact('contacts'));
    }

    public function show(ContactForm $contact)
    {
        return view('dashboard.about.show', compact('contact'));
    }

    public function destroy(ContactForm $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contact Form deleted successfully');
    }

}
