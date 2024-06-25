<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;


class LoginController extends Controller

{
    public function index()
    {
        return view('login');
    }


    public function auth(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('ukm');
        }


        return back()->withErrors([
            'email' => 'Tidak ada akun yang cocok dengan input anda'
        ])->onlyInput('email');
    }


    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect()->route('login');
    }

}
