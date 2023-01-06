<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('users/home');
});

Route::get('/dashboard', [PostController::class, 'index']
)->middleware(['auth', 'verified'])->name('dashboard');;

Route::get('/newpost', [PostController::class, 'create'])->name('newpost');

Route::post('/dashboard', [PostController::class, 'store'])->name('store');

Route::get('/newpost', function () {
    return view('newpost');
})->middleware(['auth', 'verified'])->name('newpost');

Route::get('/yourpage', function () {
    return view('yourpage');
})->middleware(['auth', 'verified'])->name('yourpage');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
