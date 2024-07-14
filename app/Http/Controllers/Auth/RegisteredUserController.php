<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller{
    
    public function store(Request $request){
        $request->validate([
            'name' => ['required','string','max:255'],
            'last_name' => ['required','string','max:255'],
            'phone_number' => ['required','string','max:11'],
            'email' => ['required','string','email','max:255','unique:users'],
            'password' => ['required','string','min:8',Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' =>  bcrypt($request->password),
        ]);


        Auth::login($user);
        return to_route('projects.index');        

    }
}
