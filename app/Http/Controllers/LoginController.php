<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('Login.login');
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
        
            return redirect()->intended('/dashboard'); // Mengarahkan ke halaman dashboard setelah login berhasil
        }
    }
            
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}