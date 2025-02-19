<?php

use App\Http\Controllers\MainController;

use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'welcome'])->name('welcome');

Route::get('videos', [MainController::class, 'videos'])->name('videos');
