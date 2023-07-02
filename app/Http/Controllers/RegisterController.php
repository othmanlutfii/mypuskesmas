<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('registration/registration');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => "required",
            'email' => 'required|email:dns|unique:users',
            'password' => 'required',
            'role' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request -> session()->flash('success','Registration Successfull, Please Login');

        return redirect('/login');
    }
}
