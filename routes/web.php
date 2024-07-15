<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'dashboard'], function () {
    // Rutas para el recurso 'post' manejadas por el controlador 'PostController'
    Route::resource('post', PostController::class);

    // Rutas para el recurso 'category' manejadas por el controlador 'CategoryController'
    Route::resource('category', CategoryController::class);
});
