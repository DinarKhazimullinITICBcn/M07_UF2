<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController;

Route::get('/', function () {
    return 'welcome';
});

Route::prefix('dinar')->group(function(){
    Route::get('/signin', [SignController::class, 'signin'])->name('signin');
    Route::get('/signup', [SignController::class, 'signup'])->name('signup');
});
Route::prefix('metodepost')->group(function(){
    Route::post('products', [SignController::class, 'products'])->name('products');
});