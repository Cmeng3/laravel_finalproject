<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:1000',
            'user_id' => 'nullable|integer',
        ]);

        ContactUs::create($validatedData);

        return response()->json(['message' => 'Contact form submitted successfully.'], 200);
    }

    public function showForm()
    {
        return view('contactUs');
    }
}
