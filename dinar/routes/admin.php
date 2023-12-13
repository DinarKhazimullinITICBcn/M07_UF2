<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CentresController;

Route::middleware(['admin_db'])->group(function(){
    Route::post('/view',[AdminController::class, 'view'])->name('view');
    Route::get('/view',[AdminController::class, 'viewGet'])->name('viewGet');
    Route::get('/centres',[AdminController::class, 'centres'])->name('centres');
    Route::get('/professorat',[AdminController::class, 'professorat'])->name('professorat');
    Route::get('/alumnat',[AdminController::class, 'alumnat'])->name('alumnat');
    Route::get('/centres',[CentresController::class, 'centres'])->name('afegeixcentre');
});
?>