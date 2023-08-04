<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect('discussions');
        } else {
            return redirect('login')->with('error_message', 'failed to login');
        }
    }

    // public function register_form()
    // {
    //     return view('auth.register');
    // }

    // public function register(Request $request)
    // {
    //     $request->validate([
    //         'name'      => 'required',
    //         'email'     => 'required|email|unique:users',
    //         'password'  => 'required|min:6|confirmed',
    //     ]);
    // }
}
