<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index() {
        // Route --> /Characters/
        $characters = Character::orderBy('created_at','desc')->get();
        return view('characters.index', ["characters" => $characters]);
    }

    public function show($id) {
        // route --> /Characters/{id}
        $character = Character::findOrFail($id);
        return view('characters.show', ["character" => $character]);
    }

    public function create() {
        // route --> /characters/create
        return view('characters.create');
    }
}
