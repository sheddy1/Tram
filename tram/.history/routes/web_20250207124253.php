<?php

use App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [Controller::class, 'welcome']);
