<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\admin\LoginController;
use \App\Http\Controllers\admin\DashboardController;
use \App\Http\Controllers\admin\SettingController;
use \App\Http\Controllers\admin\PostController;
use \App\Http\Controllers\admin\TrademarkController;
use \App\Http\Controllers\admin\BannerController;

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

    Route::prefix('trademark')->name('trademark.')->group(function () {
        Route::get('/', [TrademarkController::class, 'index'])->name('index');
        Route::get('create', [TrademarkController::class, 'create'])->name('create');
        Route::post('store', [TrademarkController::class, 'store'])->name('store');
        Route::get('delete/{id}', [TrademarkController::class, 'delete']);
        Route::get('edit/{id}', [TrademarkController::class, 'edit']);
        Route::post('update/{id}', [TrademarkController::class, 'update']);
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

Route::post('ckeditor/upload', [DashboardController::class, 'upload'])->name('ckeditor.image-upload');
