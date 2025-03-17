<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/characters', [CharacterController::class, 'index']);
Route::get('/characters/create', [CharacterController::class, 'create']);
Route::get('/characters/{id}', [CharacterController::class, 'show']);