<?php

use App\Http\Controllers\Admin\ProfessoratController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlumnesController;
use App\Http\Controllers\Admin\CentresController;
    Route::middleware(['admin_db'])->group(Function(){
        Route::post('/usuarisfaaf', [AdminController::class, 'usuaris'])->name('usuaris');
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
        //Part del Joel
        Route::get('/centres', [CentresController::class, 'index'])->name('centres');
        Route::get('/crearCentres',[CentresController::class, 'create'])->name('crearCentres');
        Route::post('/inserirCentres',[CentresController::class, 'store'])->name('inserirCentres');
        Route::any('/eliminaCentres/{centre}',[CentresController::class, 'destroy'])->name('eliminaCentres');
        Route::any('/modificaCentres/{centre}',[CentresController::class, 'edit'])->name('modificaCentres');
        Route::any('/actualitzaCentres/{centre}',[CentresController::class, 'update'])->name('update');
        // Rutes relacionades amb el professorat
        Route::get('/professorat', [ProfessoratController::class, 'index'])->name('professorat');
        Route::get('/crearProfessorat', [ProfessoratController::class, 'create'])->name('crearProfessorat');
        Route::post('/inserirProfessorat', [ProfessoratController::class, 'store'])->name('inserirProfessorat');
        Route::get('/modificaProfessorat/{professorat}', [ProfessoratController::class, 'edit'])->name('modificaProfessorat');
        Route::post('/actualitzarProfessorat/{professorat}', [ProfessoratController::class, 'update'])->name('actualitzarProfessorat');
        Route::get('/eliminarProfessorat/{professorat}', [ProfessoratController::class, 'destroy'])->name('eliminarProfessorat');
        Route::get('/mostraProfessorat/{professorat}', [ProfessoratController::class, 'show'])->name('mostraProfessorat');
    });
?>
