<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index()
    {
        return view("registration/login");
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            // Authentication passed...
            return redirect()->intended('/pasien');

        return back() -> with('loginError', 'Login fail');

        } 
        else {
            return back()->with('error', 'Wrong Login Details');
        }

    }
}
