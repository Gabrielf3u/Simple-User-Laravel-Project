<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origin extends Model
{
    protected $fillable = ['name', 'location', 'description'];
    
    /** @use HasFactory<\Database\Factories\OriginFactory> */
    use HasFactory;

    public function characters() {
        return $this->hasMany(Character::class);
    }

}
