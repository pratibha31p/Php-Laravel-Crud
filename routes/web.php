<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
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


// Admin
Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');

 Route::post('/admin/login',[AdminController::class,'makelogin'])->name('admin.makelogin');
Route::get('/admin/register',[AdminController::class,'register'])->name('admin.register');

 Route::post('/admin/register',[AdminController::class,'makeregister'])->name('admin.makeregister');



 Route::group(['middleware' =>'auth'],function()
 {
     Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
     Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin.logout');
  





 //Product

 Route::get('/admin/product',[ProductController::class,'index'])->name('admin.product.list');
 Route::get('/admin/product/create',[ProductController::class,'create'])->name('admin.product.create');
 Route::post('/admin/product/create',[ProductController::class,'store'])->name('admin.product.store');
 Route::get('/admin/product/edit/{id}',[ProductController::class,'edit'])->name('admin.product.edit');
 Route::post('/admin/product/edit/{id}',[ProductController::class,'update'])->name('admin.product.update');
 Route::post('/admin/product/delete',[ProductController::class,'destroy'])->name('admin.product.delete');
 Route::get('/admin/product/status-update/{id}',[ProductController::class,'status_update'])->name('admin.product.list.status-update');



});