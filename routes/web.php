<?php

use App\Http\Controllers\HomePage;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomePageController::class, 'home'])->name('home');

