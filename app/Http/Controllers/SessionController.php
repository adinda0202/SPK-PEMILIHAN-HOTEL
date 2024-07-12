<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    function index()
    {
        return view("sesi/index");
    }
    function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email Wajib Diisi',
            'password.required'=>'Password Wajib Diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'Password' => $request->password
        ];
        if(Auth::attempt($infologin)){
            //sukses
            return 'sukses';
        }else{
            //gagal
            return 'gagal';
        }
        }
    }

