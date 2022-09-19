<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
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

Route::get('/',[FrontendController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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