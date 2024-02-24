<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicacionesController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

#######  CRUD de publicaciones
Route::get('/misPublicaciones', [ PublicacionesController::class, 'index' ])->middleware(['auth', 'verified'])->name('misPublicaciones');
Route::get('/nuevaPublicacion', [ PublicacionesController::class, 'create' ])->middleware(['auth', 'verified'])->name('nuevaPublicacion');
Route::post('/agregarPublicacion', [ PublicacionesController::class, 'store' ]);
Route::get('/eliminarPublicacion/{id}', [ PublicacionesController::class, 'confirmarBaja' ]);
Route::delete('/eliminarPublicacion', [ PublicacionesController::class, 'destroy']);





Route::middleware('auth')->group(function () 
{
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
