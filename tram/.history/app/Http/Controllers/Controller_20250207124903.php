<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class Controller
{

    public function welcome()
    {
        return view('main.pages.welcome');
    }
}
