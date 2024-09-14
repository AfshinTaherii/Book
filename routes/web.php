<?php

use App\Http\Controllers\Front\BlogController;
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



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/addToBasket/{id}', [HomeController::class, 'addToBasket'])->name('addToBasket')->middleware('auth');
Route::get('/productList/{slug}', [\App\Http\Controllers\Admin\CategoryController::class, 'productList'])->name('productList');
Route::get('/showProduct/{slug}', [\App\Http\Controllers\Admin\CategoryController::class, 'showProduct'])->name('showProduct');
Route::get('/detailBlog/{slug}', [BlogController::class, 'detailBlog'])->name('detailBlog');


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

Route::group(['prefix' => 'basket','middleware' => ['auth']],function () {
    Route::get('/shopBasket', [HomeController::class, 'shopBasket'])->name('shopBasket');
    Route::get('/deleteCart/{id}', [HomeController::class, 'deleteCart'])->name('deleteCart');
    Route::post('/updateCart', [HomeController::class, 'updateCart'])->name('updateCart');
    Route::get('/checkBasket', [HomeController::class, 'checkBasket'])->name('CheckBasket');
    Route::post('/sendingBasket', [HomeController::class, 'sendingBasket'])->name('SendingBasket');

});
