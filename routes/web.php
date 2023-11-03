<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NuevaPublicacionController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

#######  CRUD de publicaciones
Route::get('/misPublicaciones', [ NuevaPublicacionController::class, 'index' ])->middleware(['auth', 'verified'])->name('misPublicaciones');
Route::get('/nuevaPublicacion', [ NuevaPublicacionController::class, 'create' ])->middleware(['auth', 'verified'])->name('nuevaPublicacion');
Route::post('/agregarPublicacion', [ NuevaPublicacionController::class, 'store' ]);
Route::get('/eliminarPublicacion/{id}', [ NuevaPublicacionController::class, 'confirmarBaja' ]);
Route::delete('/eliminarPublicacion', [ NuevaPublicacionController::class, 'destroy']);





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
