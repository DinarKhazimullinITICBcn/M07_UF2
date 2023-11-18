<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'welcome';
});

Route::prefix('dinar')->group(function(){
    Route::get('/signin/{valor1}/{valor2}/{valor3}/{valor4}', [SignController::class, 'signin']);
    Route::get('/signup/{valor1}/{valor2}/{valor3}', [SignController::class, 'signup']);
});