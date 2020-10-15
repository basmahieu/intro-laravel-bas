<?php

// You should end up with two controllers 
// one for the Home page, and one for the Reviews page, each one with one, short, method.


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        return view('home');
    }
}
