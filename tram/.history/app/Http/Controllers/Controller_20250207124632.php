<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class Controller
{
    public function __construct()
    {
        // No need to inject the base controller
    }

    public function welcome()
    {
        return view('main.pages.welcome');
    }
}
