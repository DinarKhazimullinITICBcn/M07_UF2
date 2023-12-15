<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlumnesController;

    Route::middleware(['admin_db'])->group(Function(){
        Route::post('/usuarisfaaf', [AdminController::class, 'usuaris'])->name('usuaris');
        Route::get('/centresfaaf', [AdminController::class, 'centres'])->name('centres');
        //Aquestes rutes son todes en base a AlumnesController
        Route::get('/alumnat', [AlumnesController::class, 'index'])->name('alumnat');
        Route::get('/crearAlumne', [AlumnesController::class, 'create'])->name('crearAlumne'); 
        Route::post('/inserirAlumne', [AlumnesController::class, 'store'])->name('inserirAlumne');
        //Aquestes rutes necesiten una instancia de alumne, especificada en el moment en el que nosaltres
        //fem el for each en la vista.
        Route::get('/modificaAlumne/{alumne}', [AlumnesController::class, 'edit'])->name('modificaAlumne');
        Route::get('/actualitzarAlumne/{alumne}', [AlumnesController::class, 'update'])->name('actualitzarAlumne');
        Route::get('/eliminarAlumne/{alumne}', [AlumnesController::class, 'destroy'])->name('eliminarAlumne');
        Route::get('/mostrarAlumne/{alumne}', [AlumnesController::class, 'show'])->name('mostrarAlumne');
        Route::get('/professoratfaaf', [AdminController::class, 'professorat'])->name('professorat');
        Route::get('/adminVistafaaf', [AdminController::class, 'adminVista'])->name('adminVista');
    });
?>