<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserLoginRegisterController;
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

Route::get('/', function() {
    return view('home.landing-page');
});

Route::get('/songs', [ListingController::class, 'index']);
Route::get('/songs/{id}', [ListingController::class, 'show']);

Route::get('/login', [UserLoginRegisterController::class, 'login']);
Route::get('/register', [UserLoginRegisterController::class, 'register']);