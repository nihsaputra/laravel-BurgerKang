<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function index() {
        return view('auth/login',[
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request) {
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        if (Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended("/");
        }

        $request->session()->flash('failed-login', 'Login Failed!');

        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
