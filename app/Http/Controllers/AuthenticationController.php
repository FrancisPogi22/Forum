<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

        return view('userpages.dashboard');
    }
    public function logout(Request $request){
        if($request->session()->has('loginId')) {
            $request->session()->forget('loginId');
            return redirect()->route('login')->with('success', 'You have been logged out successfully');
        }
        return redirect()->route('login');
    }
}
