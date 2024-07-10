<?php

use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\SegundoControlador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('test', [PrimerControlador::class, 'index']);

Route::get('otro/{post}', [PrimerControlador::class, 'otro']);
// Route::resource('post', PrimerControlador::class);
