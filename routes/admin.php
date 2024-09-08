<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\CouponsController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProvinceController;
use App\Http\Controllers\Admin\RollController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/


Route::group(['prefix' => 'admin'],function () {

    /*index*/
    Route::get('/', [UserController::class, 'index'])->name('AdminIndex');

    /*user*/
    Route::group(['prefix' => 'users'], function () {
        Route::get('/add', [UserController::class, 'add'])->name('addUser');
        Route::post('/add', [UserController::class, 'store'])->name('storeUser');
        Route::get('/update/{id}', [UserController::class, 'update'])->name('updateUser');
        Route::post('/update', [UserController::class, 'storeUpdate'])->name('storeUpdate');
        Route::get('/view/{id}', [UserController::class, 'view'])->name('viewUser');
        Route::get('/list', [UserController::class, 'listt'])->name('listUser');
        Route::get('/ajax', [UserController::class, 'ajax'])->name('ajaxUser');
        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('deleteUser');
    });

    /*group*/
    Route::group(['prefix' => 'Category'], function () {
        Route::get('/add', [CategoryController::class, 'add'])->name('addCategory');
        Route::post('/add', [CategoryController::class, 'store'])->name('storeCategory');
        Route::get('/list', [CategoryController::class, 'listt'])->name('listCategory');
        Route::get('/ajax', [CategoryController::class, 'ajax'])->name('ajaxCategory');
        Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('deleteCategory');
        Route::get('/update/{id}', [CategoryController::class, 'update'])->name('updateCategory');
        Route::post('/update', [CategoryController::class, 'storeUpdate'])->name('storeUpdateCategory');
    });

    /*order*/
    Route::group(['prefix' => 'order'], function () {
        Route::get('/wait', [OrderController::class, 'wait'])->name('waitOrder');
        Route::get('/send', [OrderController::class, 'send'])->name('sendOrder');
        Route::get('/notSubmit', [OrderController::class, 'notSubmit'])->name('notSubmitOrder');
        Route::get('/waitAjax', [OrderController::class, 'waitAjax'])->name('waitAjaxOrder');
        Route::get('/sendAjax', [OrderController::class, 'sendAjax'])->name('sendAjaxOrder');
        Route::get('/notSubmitAjax', [OrderController::class, 'notSubmitAjax'])->name('notSubmitAjaxOrder');
        Route::get('/deleteOrder/{id}', [OrderController::class, 'deleteOrder'])->name('deleteOrder');
        Route::get('/seeOrder/{id}', [OrderController::class, 'seeOrder'])->name('seeOrder');
        Route::get('/sendOrder/{id}', [OrderController::class, 'sendOrder'])->name('sendOrder');

    });

    /*province*/

    Route::group(['prefix' => 'province'], function () {
        Route::get('/add', [ProvinceController::class, 'add'])->name('addProvince');
        Route::post('/add', [ProvinceController::class, 'store'])->name('storeProvince');
        Route::get('/list', [ProvinceController::class, 'listt'])->name('listProvince');
        Route::get('/ajax', [ProvinceController::class, 'ajax'])->name('ajaxProvince');
        Route::get('/delete/{id}', [ProvinceController::class, 'delete'])->name('deleteProvince');
        Route::get('/update/{id}', [ProvinceController::class, 'update'])->name('updateProvince');
        Route::post('/update', [ProvinceController::class, 'storeUpdate'])->name('storeUpdateProvince');
    });

    /*city*/

    Route::group(['prefix' => 'city'], function () {
        Route::get('/add', [CityController::class, 'add'])->name('addCity');
        Route::post('/add', [CityController::class, 'store'])->name('storeCity');
        Route::get('/list', [CityController::class, 'listt'])->name('listCity');
        Route::get('/ajax', [CityController::class, 'ajax'])->name('ajaxCity');
        Route::get('/delete/{id}', [CityController::class, 'delete'])->name('deleteCity');
        Route::get('/update/{id}', [CityController::class, 'update'])->name('updateCity');
        Route::post('/update', [CityController::class, 'storeUpdate'])->name('storeUpdateCity');
    });





    /*blog*/
    Route::group(['prefix' => 'blog'], function () {
        Route::get('/add', [BlogController::class, 'add'])->name('addBlog');
        Route::post('/add', [BlogController::class, 'store'])->name('storeBlog');
        Route::get('/list', [BlogController::class, 'listt'])->name('listBlog');
        Route::get('/ajax', [BlogController::class, 'ajax'])->name('ajaxBlog');
        Route::get('/delete/{id}', [BlogController::class, 'delete'])->name('deleteBlog');
        Route::get('/update/{id}', [BlogController::class, 'update'])->name('updateBlog');
        Route::post('/update', [BlogController::class, 'storeUpdate'])->name('storeUpdateBlog');
    });



    /*product*/
    Route::group(['prefix' => 'product'], function () {
        Route::get('/add', [ProductController::class, 'add'])->name('addProduct');
        Route::post('/add', [ProductController::class, 'store'])->name('storeProduct');
        Route::get('/list', [ProductController::class, 'listt'])->name('listProduct');
        Route::get('/ajax', [ProductController::class, 'ajax'])->name('ajaxProduct');
        Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('deleteProduct');
        Route::get('/update/{id}', [ProductController::class, 'update'])->name('updateProduct');
        Route::post('/update', [ProductController::class, 'storeUpdate'])->name('storeUpdateProduct');
    });



    /*event*/
    Route::group(['prefix' => 'event'], function () {
        Route::get('/add', [EventsController::class, 'add'])->name('addEvent');
        Route::post('/add', [EventsController::class, 'store'])->name('storeEvent');
        Route::get('/list', [EventsController::class, 'listt'])->name('listEvent');
        Route::get('/ajax', [EventsController::class, 'ajax'])->name('ajaxEvent');
        Route::get('/update/{id}', [EventsController::class, 'update'])->name('updateEvent');
        Route::post('/update', [EventsController::class, 'storeUpdate'])->name('storeUpdateEvent');
        Route::get('/delete/{id}', [EventsController::class, 'delete'])->name('deleteEvent');
    });

    /*coupon*/
    Route::group(['prefix' => 'coupon'], function () {
        Route::get('/add', [CouponsController::class, 'add'])->name('addCoupon');
        Route::post('/add', [CouponsController::class, 'store'])->name('storeCoupon');
        Route::get('/list', [CouponsController::class, 'listt'])->name('listCoupon');
        Route::get('/ajax', [CouponsController::class, 'ajax'])->name('ajaxCoupon');
        Route::get('/update/{id}', [CouponsController::class, 'update'])->name('updateCoupon');
        Route::post('/update', [CouponsController::class, 'storeUpdate'])->name('storeUpdateCoupon');
        Route::get('/delete/{id}', [CouponsController::class, 'delete'])->name('deleteCoupon');
    });

    /*slider*/
    Route::group(['prefix' => 'slider'], function () {
        Route::get('/add', [SliderController::class, 'add'])->name('addSlider');
        Route::post('/add', [SliderController::class, 'store'])->name('storeSlider');
        Route::get('/list', [SliderController::class, 'listt'])->name('listSlider');
        Route::get('/ajax', [SliderController::class, 'ajax'])->name('ajaxSlider');
        Route::get('/delete/{id}', [SliderController::class, 'delete'])->name('deleteSlider');
    });


    /*Gallery*/
    Route::post('ckeditorUpload', [GalleryController::class, 'upload'])->name('ckeditorUpload');

    /*roll*/

    Route::group(['prefix' => 'roll'], function () {;
        Route::get('/add', [RollController::class, 'add'])->name('addRoll');
        Route::post('/add', [RollController::class, 'store'])->name('storeRoll');
        Route::get('/list', [RollController::class, 'listt'])->name('listRoll');
        Route::get('/ajax', [RollController::class, 'ajax'])->name('ajaxRoll');
        Route::get('/delete/{id}', [RollController::class, 'delete'])->name('deleteRoll');
        Route::get('/update/{id}', [RollController::class, 'update'])->name('updateRoll');
        Route::post('/update', [RollController::class, 'storeUpdate'])->name('storeUpdateRoll');
    });

    /*comment*/

    Route::group(['prefix' => 'comment'], function () {;
        Route::get('/list', [CommentController::class, 'listt'])->name('listComments=');
        Route::get('/ajax', [CommentController::class, 'ajax'])->name('ajaxComments');
        Route::get('/delete/{id}', [CommentController::class, 'delete'])->name('deleteComments');
        Route::post('/update', [CommentController::class, 'storeUpdate'])->name('storeUpdateComments');
    });

});
