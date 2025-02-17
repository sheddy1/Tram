<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller extends Controller
{

    public function welcome()
    {
        return view('main.pages.welcome');
    }
}
