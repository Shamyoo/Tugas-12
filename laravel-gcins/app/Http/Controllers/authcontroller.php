<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('Register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'gender' => 'required'
        ]);

        $first = $request->firstName;
        $last = $request->lastName;
        
        return view('welcome', compact('first', 'last'));
    }
}