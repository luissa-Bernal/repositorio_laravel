<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        //return view ('Welcome');
        return "Bienvenido al curso de Laravel";
    }
    
    
}