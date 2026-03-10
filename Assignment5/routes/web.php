<?php

use Illuminate\Support\Facades\Route;

Route::get('/account-inactive', function () {
    return 'Account is not active';
})->name('account.inactive');

Route::get('/dashboard', function () {
    return 'Dashboard page';
})->middleware('check.account');