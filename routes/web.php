<?php

use App\Http\Controllers\ProductoServicioController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Redirigir la ruta raíz al índice de productos/servicios
Route::get('/', [ProductoServicioController::class, 'index'])->name('productos-servicios.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Rutas para productos y servicios
    Route::get('/productos-servicios', [ProductoServicioController::class, 'index'])->name('productos-servicios.index');
    Route::post('/producto-servicio', [ProductoServicioController::class, 'store'])->name('producto-servicio.store');
    Route::get('/producto-servicio/{id}/edit', [ProductoServicioController::class, 'edit'])->name('producto-servicio.edit');
    Route::put('/producto-servicio/{id}', [ProductoServicioController::class, 'update'])->name('producto-servicio.update');
    Route::delete('/producto-servicio/{id}', [ProductoServicioController::class, 'destroy'])->name('producto-servicio.destroy');
    Route::get('/producto-servicio/{id}', [ProductoServicioController::class, 'show'])->name('producto-servicio.show');
});

require __DIR__.'/auth.php';

