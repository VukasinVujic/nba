<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginsController extends Controller
{

    public function logout()
    {
        auth()->logout();
       return redirect()->route('allTeams');
    }

    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email'=> 'required',
            'password'=> 'required'
        ]);

        if(!auth()->attempt($request->only('email','password'))) {
            return back()->withErrors([
                'message' => 'Wrong login intake'
            ]);
        }

        return redirect()->route('allTeams');
    }
}
