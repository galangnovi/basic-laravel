<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cobahallo extends Controller
{
    function index(){
        $nama = 'Galang';
        $hobby = 'Memancing';
        return view('home',array_merge(['namasaya'=> $nama], compact('hobby')));
    }
}
