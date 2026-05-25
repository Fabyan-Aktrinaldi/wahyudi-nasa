<?php

// use App\Http\Controllers\Admin\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleAPIController;
use App\Http\Controllers\Api\AuthApiController;
use App\Http\Controllers\Api\KategoriApiController;

Route::post('/login', [AuthApiController::class, 'login']);
Route::post('/logout', [AuthApiController::class, 'logout'])->middleware('auth:sanctum');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/artikel', [ArticleAPIController::class, 'index']);
Route::get('/artikel/{id}', [ArticleAPIController::class, 'show']);
Route::get('/kategori', [ArticleAPIController::class, 'categories']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/artikel', [ArticleAPIController::class, 'store']);
    Route::put('/artikel/{id}', [ArticleAPIController::class, 'update']);
    Route::delete('/artikel/{id}', [ArticleAPIController::class, 'destroy']);
});


Route::get('/kategori', [ArticleAPIController::class, 'categories']);

Route::middleware('auth:sanctum')->group(function () {
    // artikel
    Route::post('/artikel', [ArticleAPIController::class, 'store']);
    Route::put('/artikel/{id}', [ArticleAPIController::class, 'update']);
    Route::delete('/artikel/{id}', [ArticleAPIController::class, 'destroy']);

    // kategori
    Route::post('/kategori', [KategoriApiController::class, 'store']);
    Route::put('/kategori/{id}', [KategoriApiController::class, 'update']);
    Route::delete('/kategori/{id}', [KategoriApiController::class, 'destroy']);
});
