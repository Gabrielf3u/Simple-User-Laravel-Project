<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = ['name', 'age', 'bio', 'origin_id'];

    /** @use HasFactory<\Database\Factories\CharacterFactory> */
    use HasFactory;

    public function origin() {
        return $this->belongsTo(Origin::class);
    }
}
