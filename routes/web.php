<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('welcome');
});
// Route::get('/', [AuthController::class, 'home']);

Route::get('login', [AuthController::class, 'index'])->name('login');
// below route gets hit when a user log ins
Route::post('login', [AuthController::class, 'login'])->name('login');
// to display users who are registered
Route::get('register', [AuthController::class, 'register_view'])->name('register');
// below route gets hit when a new user registers
Route::post('register', [AuthController::class, 'register'])->name('registernew');
// after registering USER will be redirected to this route
Route::get('home', [AuthController::class, 'home'])->name('home');
