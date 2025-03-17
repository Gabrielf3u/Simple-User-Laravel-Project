<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Origin;
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
        $origins = Origin::all();

        return view('characters.create', ["origins" => $origins]);
        
    }

    public function store(Request $request) {
        // --> /characters/ (POST)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'origin_id' => 'required|exists:origins,id',
        ]);

        Character::create($validated);
        return redirect()->route('characters.index');
    }

    public function destroy($id) {
        // -> /characters/{id} (DELETE)
        $character = Character::findOrFail($id);
        $character->delete();
        return redirect()->route('characters.index');

    }
}
