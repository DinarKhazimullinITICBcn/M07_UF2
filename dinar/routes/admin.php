<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

    Route::middleware(['admin_db'])->group(Function(){
        Route::get('/centres', [AdminController::class, 'centres']);
        Route::post('/usuaris', [AdminController::class, 'usuaris'])->name('usuaris');
    });
?>