<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {

        return view('userpages.dashboard');
    }

    public function logout(Request $request)
    {
    }
}
