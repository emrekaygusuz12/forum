<?php

namespace App\Http\Controllers;


class SessionsController extends Controller
{

    public function create(){
        return view('sessions.create');
    }

    public function store(){

        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($attributes)){
            return redirect('/')->with('success', "Welcome Back!");
        }

        return back()->withErrors(['email'=> 'Your provided credentials could not be verified.']);
    }
    public function destroy(){
        auth()->logout();

        return redirect('/')->with('success', 'The user has been logged out. Goodbye!');
    }
}
