<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', [InfoController::class, 'index']);