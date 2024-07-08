<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactUsController extends Controller
{
   public function form(){
    return view('contact-us');
   }

   public function store(Request $request){

      

    $post = new ContactUs();

    $post-> f_name = $request-> f_name;
    $post-> l_name = $request-> l_name;
    $post-> email = $request-> email;
    $post-> phone = $request-> phone;
    $post-> message = $request-> message;

    $post->save();

    return view('/contact-us');
   }
}



