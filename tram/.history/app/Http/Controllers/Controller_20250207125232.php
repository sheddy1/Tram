<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller extends BaseController
{

    public function welcome()
    {
        return view('main.pages.welcome');
    }
}
