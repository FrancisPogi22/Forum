<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {

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
