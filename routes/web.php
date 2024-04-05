<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    return view('welcome');
})->middleware('auth:sanctum');

// Route::get('/login', function () {
//     return view('login');
// }
// )->name('login');

