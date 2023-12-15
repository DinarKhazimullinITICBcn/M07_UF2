<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CentresController;

Route::middleware(['admin_db'])->group(function(){
    Route::post('/view',[AdminController::class, 'view'])->name('view');
    Route::get('/view',[AdminController::class, 'viewGet'])->name('viewGet');
    Route::any('/centres',[CentresController::class, 'index'])->name('centres');
    Route::get('/professorat',[AdminController::class, 'professorat'])->name('professorat');
    Route::get('/alumnat',[AdminController::class, 'alumnat'])->name('alumnat');
    Route::get('/crearCentres',[CentresController::class, 'create'])->name('crearCentres');
    Route::post('/inserirCentres',[CentresController::class, 'store'])->name('inserirCentres');
    Route::any('/eliminaCentres/{centre}',[CentresController::class, 'destroy'])->name('eliminaCentres');
    Route::any('/modificaCentres/{centre}',[CentresController::class, 'edit'])->name('modificaCentres');
    Route::any('/actualitzaCentres/{centre}',[CentresController::class, 'update'])->name('update');
});
?>