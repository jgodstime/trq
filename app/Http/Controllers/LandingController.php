<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){

        return view('home.index');
    }
    public function index2(){

        return view('home.index2');
    }
    public function index3(){

        return view('home.index3');
    }
    //
}
