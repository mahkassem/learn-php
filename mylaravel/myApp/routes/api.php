<?php

use App\Http\Controllers\FriendController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/friends', [FriendController::class, 'index']);
