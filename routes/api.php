<?php

// use App\Http\Controllers\Admin\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleAPIController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/artikel', [ArticleAPIController::class, 'index']);
Route::get('/artikel/{id}', [ArticleAPIController::class, 'show']);
Route::get('/kategori', [ArticleAPIController::class, 'categories']);
