<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CastController;

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


Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');

Route::post('/welcome', [AuthController::class, 'showWelcome'])->name('welcome');

Route::get('/master', function() {
    return view('layout.master');
});

Route::get('/table', function(){
    return view('/partial.table');
})->name('table');

Route::get('/data-tables', function(){
    return view('/partial.data-tables');
})->name('data-tables');

Route::resource('cast', CastController::class);