<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahmoudController;
use App\Http\Controllers\NourhanController;

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/Nourhan', [NourhanController::class, 'index']);
Route::get('/Mahmoud', [MahmoudController::class, 'index']);
