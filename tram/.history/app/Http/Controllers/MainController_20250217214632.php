<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function welcome()
    {
        return view('main.pages.welcome');
    }

    public function videos()
    {
        return view('main.pages.videos');
    }
}
