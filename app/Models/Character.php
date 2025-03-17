<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = ['name', 'age', 'bio'];

    /** @use HasFactory<\Database\Factories\CharacterFactory> */
    use HasFactory;
}
