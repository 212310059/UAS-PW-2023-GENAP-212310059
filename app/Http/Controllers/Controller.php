<?php

namespace App\Http\Controller;

use Illuminate\Http\request;

class HomeController extends Controller{
    public function index (){
        return view('home');
    }
}