<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    //
    function index(){
        return '<h1>Daftar Hotel dari controller</h1>';
    }
    function detail($id)
    {   
        return '<h1> Daftar Hotel dengan Id $id</h1>'; 
    }
}
