<?php

use App\Http\Controllers\Front\LoginController;
use App\Http\Controllers\Front\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});




Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/UserRegister', [RegisterController::class, 'StoreUser'])->name('StoreRegister');

Route::get('/Login', [LoginController::class, 'Login'])->name('Login');
Route::post('/storeLogin', [LoginController::class, 'StoreLogin'])->name('StoreLogin');

Route::get('/resetPass', [LoginController::class, 'password_forgot'])->name('passwordForget');
Route::post('/sendPass', [LoginController::class, 'SendPassword'])->name('sendPassword');

Route::get('/verify_phone_number', [RegisterController::class, 'verify_phone_number'])->name('verify_phone_number');
Route::post('/checkCode', [RegisterController::class, 'CheckCode'])->name('CheckCode');

Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
