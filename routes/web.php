<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('guest')->group(function () {
    Route::resource('login', LoginController::class)->only(['index', 'store']);

    Route::resource('register', RegisterController::class)->only(['index', 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('/', function (Request $request) {
        return view('homepage');
    })->name('home');

    Route::delete('/logout', LogoutController::class);

    require 'admin.php';
});