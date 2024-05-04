<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index () {
        
        $users = User::all();
        return view('users.index' , ["users" => $users]);
    }

    public function create () {
        return view('users.create');
    }

    public function store () {

        request()->validate([
            'name' => ['required', 'string', 'max:255', 'min:3', 'regex:/^[a-zA-Z\s]+$/'],
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'name.regex' => 'The name field format is invalid. It should only contain alphabetic characters and spaces.',
        ]);
        
        

        $name = request()->name;
        $email = request()->email;
        $password = request()->password;

        $hashedPassword = bcrypt($password);

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => $hashedPassword,
        ]);

        return to_route('users.index');
    }

    public function show (User $user) {

        return view('users.show' , ["user" => $user]);
    }

    public function edit(User $user) {
        return view('users.edit', ['user' => $user]);
    }

    public function update(User $user) {

        request()->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|email|max:255',
        ]);
        
        $user->name = request()->name;
        $user->email = request()->email;
        $user->save();
        
        return to_route('users.index');
    }

    public function destroy(User $user) {
        $user->delete();
        return to_route('users.index');
    }
}
