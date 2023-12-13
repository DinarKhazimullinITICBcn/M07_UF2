<?php

use App\Http\Controllers\Admin\ProfessoratController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


    Route::middleware(['admin_db'])->group(Function(){
        Route::post('/usuaris', [AdminController::class, 'usuaris'])->name('usuaris');
        Route::get('/centres', [AdminController::class, 'centres'])->name('centres');
        Route::get('/alumnat', [AdminController::class, 'alumnat'])->name('alumnat');
        Route::get('/professorat', [ProfessoratController::class, 'index'])->name('professorat');
        Route::get('/adminView', [AdminController::class, 'adminView'])->name('adminView');

    });
?>