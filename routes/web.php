<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController as sanphamController;
use App\Http\Controllers\frontend\ContactController;

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\BrandController;

Route::get('/', [HomeController::class,'index'])->name('site.home');
Route::get('san-pham', [sanphamController::class,'index'])->name('site.product');
Route::get('chi-tiet-san-pham/{slug}', [sanphamController::class,'product_detail'])->name('site.product.detail');
Route::get('lien-he', [ContactController::class,'index'])->name('site.contact');
//admin
Route::prefix('admin')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::prefix('product')->group(function(){
        Route::get('/', [ProductController::class, 'index'])->name('admin.product.index');

        Route::get('create', [ProductController::class, 'create']);
        Route::get('{id}/edit', [ProductController::class, 'edit']);
        Route::get('delete/{id}', [ProductController::class, 'delete']);
    });
    Route::prefix('category')->group(function(){
        Route::get('/', [ProductController::class, 'index'])->name('admin.product.index');

        Route::get('create', [ProductController::class, 'create']);
        Route::get('{id}/edit', [ProductController::class, 'edit']);
        Route::get('delete/{id}', [ProductController::class, 'delete']);
    });
});
