<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

    Route::middleware(['admin_db'])->group(Function(){
        Route::post('/usuarisfaaf', [AdminController::class, 'usuaris'])->name('usuaris');
        Route::get('/centresfaaf', [AdminController::class, 'centres'])->name('centres');
        Route::get('/alumnatfaaf', [AdminController::class, 'alumnat'])->name('alumnat');
        Route::get('/professoratfaaf', [AdminController::class, 'professorat'])->name('professorat');
        Route::get('/adminVistafaaf', [AdminController::class, 'adminVista'])->name('adminVista');
    });
?>