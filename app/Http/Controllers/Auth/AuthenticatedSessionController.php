<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller{
     public function store(Request $request){
        $credentials = $request->validate([
            'email' => ['required','string','email'],
            'password' => ['required','string']
        ]);

        if( !Auth::attempt($credentials)){
            throw ValidationException::withMessages([
                'email' => __('auth.failed')
            ]);
        }

        $request->session()->regenerate();
        return redirect()->intended('projects');
     }

     public function destroy(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('home');        
     }

}
