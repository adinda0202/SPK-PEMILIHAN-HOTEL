<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function halamanregister(){
        return view('Login.Register-aplikasi');
    }
}
