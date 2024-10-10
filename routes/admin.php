<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\admin\LoginController;
use \App\Http\Controllers\admin\DashboardController;
use \App\Http\Controllers\admin\SettingController;
use \App\Http\Controllers\admin\PostController;
use \App\Http\Controllers\admin\TrademarkController;
use \App\Http\Controllers\admin\BannerController;
use \App\Http\Controllers\admin\ExperienceController;
use \App\Http\Controllers\admin\NewController;
use \App\Http\Controllers\admin\CategoryController;
use \App\Http\Controllers\admin\ProductController;

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('dologin', [LoginController::class, 'doLogin'])->name('doLogin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('check-admin-auth')->group(function () {
    Route::get('', [DashboardController::class, 'index'])->name('index');
    Route::get('statistical', [DashboardController::class, 'statistical'])->name('statistical');

    Route::prefix('banner')->name('banner.')->group(function () {
        Route::get('/', [BannerController::class, 'index'])->name('index');
        Route::get('create', [BannerController::class, 'create'])->name('create');
        Route::post('store', [BannerController::class, 'store'])->name('store');
        Route::get('delete/{id}', [BannerController::class, 'delete']);
        Route::get('edit/{id}', [BannerController::class, 'edit']);
        Route::post('update/{id}', [BannerController::class, 'update']);
    });

    Route::prefix('category')->name('category.')->group(function () {
        Route::get('', [CategoryController::class, 'index'])->name('index');
        Route::get('create', [CategoryController::class, 'create'])->name('create');
        Route::post('store', [CategoryController::class, 'store'])->name('store');
        Route::get('delete/{id}', [CategoryController::class, 'delete']);
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [CategoryController::class, 'update'])->name('update');
    });

    Route::prefix('product')->name('product.')->group(function () {
        Route::get('', [ProductController::class, 'index'])->name('index');
        Route::get('create', [ProductController::class, 'create'])->name('create');
        Route::post('store', [ProductController::class, 'store'])->name('store');
        Route::get('delete/{id}', [ProductController::class, 'delete']);
        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [ProductController::class, 'update'])->name('update');
        Route::post('delete-img', [ProductController::class, 'deleteImg']);
    });

    Route::prefix('experience')->name('experience.')->group(function () {
        Route::get('', [ExperienceController::class, 'index'])->name('index');
        Route::post('update', [ExperienceController::class, 'save'])->name('update');
    });

    Route::prefix('trademark')->name('trademark.')->group(function () {
        Route::get('/', [TrademarkController::class, 'index'])->name('index');
        Route::get('create', [TrademarkController::class, 'create'])->name('create');
        Route::post('store', [TrademarkController::class, 'store'])->name('store');
        Route::get('delete/{id}', [TrademarkController::class, 'delete']);
        Route::get('edit/{id}', [TrademarkController::class, 'edit']);
        Route::post('update/{id}', [TrademarkController::class, 'update']);
    });

    Route::prefix('category-new')->name('category-new.')->group(function () {
        Route::get('index-category', [NewController::class, 'indexCate'])->name('index-cate');
        Route::get('create-category', [NewController::class, 'createCate'])->name('create-cate');
        Route::post('store-category', [NewController::class, 'storeCate'])->name('store-cate');
        Route::get('delete-category/{id}', [NewController::class, 'deleteCate']);
        Route::get('edit-category/{id}', [NewController::class, 'editCate'])->name('edit-cate');
        Route::post('update-category/{id}', [NewController::class, 'updateCate'])->name('update-cate');
    });

    Route::prefix('new')->name('new.')->group(function () {
        Route::get('', [NewController::class, 'index'])->name('index');
        Route::get('create', [NewController::class, 'create'])->name('create');
        Route::post('store', [NewController::class, 'store'])->name('store');
        Route::get('delete/{id}', [NewController::class, 'delete']);
        Route::get('edit/{id}', [NewController::class, 'edit'])->name('edit');
        Route::post('update/{id}', [NewController::class, 'update'])->name('update');
    });

    Route::prefix('post')->name('post.')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('index');
        Route::get('create', [PostController::class, 'create'])->name('create');
        Route::post('store', [PostController::class, 'store'])->name('store');
        Route::get('delete/{id}', [PostController::class, 'delete']);
        Route::get('edit/{id}', [PostController::class, 'edit']);
        Route::post('update/{id}', [PostController::class, 'update']);
    });

    Route::prefix('setting')->name('setting.')->group(function () {
        Route::get('', [SettingController::class, 'index'])->name('index');
        Route::post('update', [SettingController::class, 'save'])->name('update');
    });

});
Route::post('get-children-c2', [CategoryController::class, 'getChildrenC2']);
Route::post('ckeditor/upload', [DashboardController::class, 'upload'])->name('ckeditor.image-upload');
