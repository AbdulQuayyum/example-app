<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/AddProduct', [HomeController::class, 'index']);

route::post('/AddProduct', [HomeController::class, 'AddProduct']);
route::get('ShowProduct', [HomeController::class, 'ShowProduct']);
route::get('DeleteProduct/{id}', [HomeController::class, 'DeleteProduct']);