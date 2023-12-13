<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlumnesController;

    Route::middleware(['admin_db'])->group(Function(){
        Route::post('/usuarisfaaf', [AdminController::class, 'usuaris'])->name('usuaris');
        Route::get('/centresfaaf', [AdminController::class, 'centres'])->name('centres');
        Route::get('/alumnat', [AlumnesController::class, 'index'])->name('alumnat');
        Route::get('/crearAlumne', [AlumnesController::class, 'create'])->name('crearAlumne'); 
        Route::post('/inserirAlumne', [AlumnesController::class, 'store'])->name('inserirAlumne');
        Route::get('/professoratfaaf', [AdminController::class, 'professorat'])->name('professorat');
        Route::get('/adminVistafaaf', [AdminController::class, 'adminVista'])->name('adminVista');
    });
?>