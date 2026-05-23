<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Api\SoapController;
use App\Http\Controllers\Public\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

//public
//halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');

//halaman detail artikel
Route::get('/artikel/{article:slug}', [HomeController::class, 'show'])->name('article.show');

//halaman login
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

//halaman admin
Route::middleware('auth')->prefix('admin')->group(function () {
    //proses logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('articles', ArticleController::class);
    Route::resource('categories', CategoryController::class);
});

//endpoint tunggal untuk SOAP service
Route::any('soap-service', [SoapController::class, 'handle'])->name('soap.service');
