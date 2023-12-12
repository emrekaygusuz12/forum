<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request['name']);

        

        $validatedData = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email|max:255',
            'password' => 'required|max:8',
            'date_of_birth' => 'nullable|date', 
        ]);

        $a = new User;
        $a ->name = $validatedData['name'];
        $a ->email = $validatedData['email'];
        $a ->password = $validatedData['password'];
        $a ->date_of_birth = $validatedData['date_of_birth'];
        $a -> save();

        session()->flash('message', 'User was created.');
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('message', 'User was deleted.');
    }
}
