<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/characters', [CharacterController::class, 'index'])->name('characters.index');
Route::get('/characters/create', [CharacterController::class, 'create'])->name('characters.create');
Route::get('/characters/{id}', [CharacterController::class, 'show'])->name('characters.show');
Route::post('/characters', [CharacterController::class, 'store'])->name('characters.store');
Route::delete('/characters/{id}', [CharacterController::class, 'destroy'])->name('characters.destroy');