<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ProductController;

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
    return view('auth.login');
});

Auth::routes();
Route::resource('products', App\Http\Controllers\ProductController::class)->middleware('auth');
Route::post('products/{products}',  [ProductController::class, "purchase"])->name("products.purchase");
Route::resource('purchases', App\Http\Controllers\PurchaseController::class)->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');
Route::get('/superadmin', [App\Http\Controllers\SuperAdminController::class, 'index'])->middleware('auth.super')->name('superadmin.index');
