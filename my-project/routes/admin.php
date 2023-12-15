<?php

use App\Http\Controllers\Admin\ProfessoratController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::middleware(['admin_db'])->group(function () {
    // Rutes relacionades amb administradors
    Route::post('/usuaris', [AdminController::class, 'usuaris'])->name('usuaris');
    Route::get('/centres', [AdminController::class, 'centres'])->name('centres');
    Route::get('/alumnat', [AdminController::class, 'alumnat'])->name('alumnat');

    // Rutes relacionades amb el professorat
    Route::get('/professorat', [ProfessoratController::class, 'index'])->name('professorat');
    Route::get('/crearProfessorat', [ProfessoratController::class, 'create'])->name('crearProfessorat');
    Route::post('/inserirProfessorat', [ProfessoratController::class, 'store'])->name('inserirProfessorat');
    Route::get('/modificaProfessorat/{professorat}', [ProfessoratController::class, 'edit'])->name('modificaProfessorat');
    Route::post('/actualitzarProfessorat/{professorat}', [ProfessoratController::class, 'update'])->name('actualitzarProfessorat');
    Route::get('/eliminarProfessorat/{professorat}', [ProfessoratController::class, 'destroy'])->name('eliminarProfessorat');
    Route::get('/mostraProfessorat/{professorat}', [ProfessoratController::class, 'show'])->name('mostraProfessorat');

    // Ruta addicional per la vista d'administrador
    Route::get('/adminView', [AdminController::class, 'adminView'])->name('adminView');
});
