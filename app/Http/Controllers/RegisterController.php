<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller {

public function create(){
    return view('register.create');
}

public function store(){

   

    $attributes = request()->validate([
        'name'=> 'required|max:255|min:5',
        'email' =>'required|email|max:255|unique:users,email',
        'password' =>'required|min:7|max:15',
    ]);

    $attributed['password'] = bcrypt($attributes['password']);

    $user = User::create($attributes);

    auth()->login($user);

    
    return redirect('/')->with('success', 'Your account has been created.');

   

}



}