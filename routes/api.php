<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;


Route::group(['middleware' => 'api'], function($router) {
    Route::post('/registrasi', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::post('/profile   ', [AuthController::class, 'profile']);
    Route::get('/get-produk',[ProdukController::class,'GetProduk']);

});

