<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function form()
    {
        return view('Sign-up');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'f_name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|numeric',
            'password' => 'required|min:8|max:50',
        ]);

        // Create a new user and save it to the database
        $user = new User();
        $user->name = $request->f_name;
        $user->email = $request->email;
        $user->telephone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->save();

        // Log the user in
        Auth::login($user);

        return redirect()->intended('/');
    }

    public function login()
    {
        return view('Sign-in');
    }

    public function logins(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:50',
        ]);

        // Attempt to authenticate the user using Laravel's built-in authentication
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            Session::put('user', $user);
            $request->session()->put('loginId', $user->id);

            return redirect()->intended('/');
        } else {
            return back()->with('error', 'Invalid email or password');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
