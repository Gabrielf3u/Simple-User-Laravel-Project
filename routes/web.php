<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/characters', function () {
    $characters = [
        ["name" => "Gon Freecss", "age" => 14, "id" => "1"],
        ["name" => "Hisoka Morow", "age" => 28, "id" => "2"],
    ];
    return view('characters.index', ["greeting" => "Hxh characters", "characters" => $characters]);
});

Route::get('/characters/create', function () {
    return view('characters.create');
});

Route::get('/characters/{id}', function ($id) {

    // Fetch record with an ID
    return view('characters.show', ["id" => $id]);
});