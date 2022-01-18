<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Auth;
Route::group(['prefix' => '/'], function () {
    Route::get('login', [LoginController::class,'loginForm'])->name('admin.login.get');
    Route::post('login', [LoginController::class, 'login'])->name('admin.login.post');
    Route::get('logout', [LoginController::class, 'logout'])->
    name('admin.logout');  
    
    Route::group(['middleware' => ['auth:admin']], function () {
       Route::get('/dashboard', [HomeController::class,'index'])->name('admin.dashboard');
       Route::get('/account', [AccountController::class, 'loadAccount'])->
       name('admin.account.user');
       Route::get('/accountAD', [AccountController::class, 'loadAccountAdmin'])->
       name('admin.account.ad');
      
       Route::group(['prefix' => '/products'], function () {
            Route::get('/', [ProductController::class, 'loadProduct'])->
            name('admin.product');
            Route::get('/create', [ProductController::class, 'viewCreate'])->
            name('admin.product.create.index');
            Route::post('/create', [ProductController::class, 'createProduct'])->
            name('admin.product.create');
            Route::get('/delete/{id}', [ProductController::class, 'deleteProduct'])->
            name('admin.product.delete');
       });
    });
  
});
