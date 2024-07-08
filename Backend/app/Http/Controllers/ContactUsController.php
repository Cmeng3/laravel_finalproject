<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function index()
    {
        $contacts = ContactUs::all();
        return view('contactus.index', compact('contacts'));
    }

    public function create()
    {
        return view('contactus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string|max:1000',
        ]);

        ContactUs::create($request->all());
        return redirect()->route('backend.contactus')->with('success', 'Contact message created successfully.');
    }

    public function edit($id)
    {
        $contact = ContactUs::where('Contact_us_ID', $id)->firstOrFail();
        return view('contactus.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'message' => 'required|string|max:1000',
        ]);

        $contact = ContactUs::findOrFail($id);
        $contact->update($request->all());

        return redirect()->route('backend.contactus')->with('success', 'Contact message updated successfully.');
    }

    public function destroy($id) {
         // Find the contact by ID and delete it
         $contact = ContactUs::where('Contact_us_ID', $id)->firstOrFail();

         // Delete the contact
         $contact->delete();

         // Redirect back with a success message
         return redirect()->route('backend.contactus')->with('success', 'Contact deleted successfully');
     }
}

