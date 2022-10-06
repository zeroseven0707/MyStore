<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\User\ProductController as UserProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\CartController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/',[UserProductController::class, 'index'])->name('dashboard');
Route::get('/product/{slug}', [UserProductController::class, 'detail'])->name('detail');
Route::get('/explore', [HomeController::class, 'explore'])->name('explore');
Route::middleware(['auth', 'isUser'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::post('/cart/in/{id}', [CartController::class, 'store']);
    Route::get('/delete/{id}', [CartController::class, 'destroy']);
    Route::get('/detail-transaksi', [CartController::class, 'detrans'])->name('detrans');
    Route::get('/edit-profile', [UserProductController::class, 'editprofile'])->name('editprofile');
    Route::post('/upate-profile', [UserProductController::class, 'updateprofile'])->name('updateprofile');
    Route::post('/checkout', [UserProductController::class, 'checkout'])->name('checkout')->middleware('isComplete');
});

 Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', "Admin\FrontendController@index");
    Route::get('/categories', "Admin\CategoryController@index");
    Route::get('/add-category', "Admin\CategoryController@add");
    Route::post('/insert-category', "Admin\CategoryController@insert");
    Route::get('/update-category/{id}',[CategoryController::class, 'appearanceupdate']);
    Route::put('/update-category/in/{id}',[CategoryController::class, 'update']);
    Route::get('/delete-category/{id}',[CategoryController::class, 'destroy']);

    Route::get('/products',[ProductController::class, 'index']);
    Route::get('/add-product',[ProductController::class, 'add']);
    Route::post('/insert-product', [ProductController::class, 'insert']);
    Route::get('/update-product/{id}',[ProductController::class, 'appearanceupdate']);
    Route::put('/update-product/in/{id}',[ProductController::class, 'update']);
    Route::get('/delete-product/{id}',[ProductController::class, 'destroy']);

});