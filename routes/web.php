<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;








Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});





Route::get('/filme/{id}', [FilmeController::class, 'show'])->name('filme.show');
Route::get('/maquinas-mortais', [FilmeController::class, 'showMaquinasMortais'])->name('maquinas-mortais');
Route::get('/zilla-vs-kong', [FilmeController::class, 'showZillavsKong'])->name('zilla-vs-kong');