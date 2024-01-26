<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ResetPasswordControllers;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('register', [RegisterController::class, 'register']);
Route::post('register', [RegisterController::class, 'store'])->name('register');

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'authenticate']);

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('home', [HomeController::class, 'home'])->name('home');


Route::get('forget-password', [ForgotPasswordController::class, 'getEmail']);
Route::post('forget-password', [ForgotPasswordController::class, 'postEmail']);


Route::get('reset-password/{token}', [ResetPasswordController::class, 'getPassword']);
Route::post('reset-password', [ResetPasswordController::class, 'updatePassword']);
