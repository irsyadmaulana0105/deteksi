<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing');
});

use App\Http\Controllers\PredictionApiController;

Route::post('/upload-gambar', [PredictionApiController::class, 'store']);
