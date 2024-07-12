<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;

class AuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleGoogleCallback()
    {
        $oauthUser = Socialite::driver('google')->user();
        $email = $oauthUser->email ?? null;

        if ($email) {
            $user = User::where('email', $email)->first();

            if ($user) {
                Auth::login($user);
                // Redirect sesuai peran pengguna setelah login
                if ($user->role === 'admin') {
                    return redirect()->route('admin.dashboard');
                } else {
                    return redirect()->route('user.home');
                }
            } else {
                // Email belum terdaftar, lakukan redirect atau tampilkan pesan kesalahan
                return redirect()->route('login')->withErrors(['email' => 'Email not registered']);
            }
        } else {
            // Tangani kasus ketika email tidak ditemukan dalam respon OAuth
            return redirect()->route('login')->withErrors(['email' => 'Unable to retrieve email from Google.']);
        }
    }


    public function handleFacebookCallback()
    {
        try {
            $oauthUser = Socialite::driver('facebook')->user();
            $email = $oauthUser->getEmail(); // Pastikan email diambil dari objek OAuth

            if ($email) {
                $user = User::where('email', $email)->first();

                if ($user) {
                    Auth::login($user);
                    if ($user->role === 'admin') {
                        return redirect()->route('admin.dashboard');
                    } else {
                        return redirect()->route('user.dashboard');
                    }
                } else {
                    return redirect()->route('login')->withErrors(['email' => 'Email not registered']);
                }
            } else {
                return redirect()->route('login')->withErrors(['email' => 'Unable to retrieve email from Facebook.']);
            }
        } catch (Exception $e) {
            return redirect()->route('login')->withErrors(['email' => 'Internal Server Error. Please try again later.']);
        }
    }
}
