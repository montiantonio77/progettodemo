<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AziendaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/azienda', [AziendaController::class, 'index'])->name('azienda.index');
Route::get('/azienda/create', [AziendaController::class, 'create'])->name('azienda.create');
Route::post('/azienda', [AziendaController::class, 'store'])->name('azienda.store');
Route::get('/azienda/{azienda}', [AziendaController::class, 'show'])->name('azienda.show');
Route::get('/azienda/{azienda}/edit', [AziendaController::class, 'edit'])->name('azienda.edit');
Route::put('/azienda/{azienda}', [AziendaController::class, 'update'])->name('azienda.update');
Route::delete('/azienda/{azienda}', [AziendaController::class, 'destroy'])->name('azienda.destroy');
