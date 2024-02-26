<?php

use App\Http\Controllers\ThemeController;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DescriptionController;

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

Route::middleware('auth')->group(function () {
    Route::get('/u/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/u/edit', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/u/edit', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/edit/theme', [ThemeController::class, 'setTheme'])->name('edit.theme');


Route::patch('/u/edit/description', [DescriptionController::class, 'update'])->middleware('auth')->name('description.update');

Route::get('/songs', [ListingController::class, 'index']);
Route::get('/songs/{id}', [ListingController::class, 'show'])->name('profile.show');

Route::get('/users', [UserController::class, 'index'])->middleware('auth');
Route::get('/u/{id}', [UserController::class, 'show'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

Route::get('/u', [UserController::class, 'findYou'])->middleware('auth');

Route::post('/songs/{id}', [ListingController::class, 'upload'])->middleware('auth');

require __DIR__.'/auth.php';
