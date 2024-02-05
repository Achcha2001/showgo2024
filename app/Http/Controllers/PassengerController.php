<?php
// app/Http/Controllers/SignupController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passenger;

class PassengerController extends Controller
{
    public function showSignupForm()
    {
        return view('register');
    }

    public function processSignup(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        
        $passenger = Passenger::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

       
        auth()->login($passenger);

       
        return redirect()->route('afterlogin')->with('success', 'Signup successful!');
    }
}
