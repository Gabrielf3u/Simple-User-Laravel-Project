<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index() {
        // Route --> /Characters/
        // Eager loading 'with('origin')' to pre-query origin instead of lazy-loading when called.
        $characters = Character::with('origin')->orderBy('created_at','desc')->paginate(10);
        return view('characters.index', ["characters" => $characters]);
    }

    public function show($id) {
        // route --> /Characters/{id}
        $character = Character::with('origin')->findOrFail($id);
        return view('characters.show', ["character" => $character]);
    }

    public function create() {
        // route --> /characters/create
        return view('characters.create');
    }
}
