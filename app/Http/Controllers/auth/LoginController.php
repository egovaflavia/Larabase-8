<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{   
    /**
     * Login Manual Laralel
     * username digunakan untuk mengubah login email ke username
     *
     * @return void
     */

    public function username()
    {
        return 'username';
    }
    
    public function login()
    {
        return view('auth.login');
    }

    public function loginProses(Request $request)
    {
        if (Auth::attempt($request->only('username','password'))) {
            return redirect()->route('home');
        } 
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
