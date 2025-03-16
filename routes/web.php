<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    $users = [
        ["name" => "Gon Freecss", "age" => 14, "id" => "1"],
        ["name" => "Hisoka Morow", "age" => 28, "id" => "2"],
    ];
    return view('users.index', ["greeting" => "Hxh characters", "users" => $users]);
});

Route::get('/users/{id}', function ($id) {

    // Fetch record with an ID
    return view('users.show', ["id" => $id]);
});