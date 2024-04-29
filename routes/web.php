<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});

Route::get('/Home', function () {
    return view('home');
});

route::get('test', [HomeController::class, 'index']);