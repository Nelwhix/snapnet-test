<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    use HasFactory;

    /**
     * Relationship with State Model
     */
    public function state() {
        return $this->belongsTo(State::class);
    }

    public function ward() {
        return $this->hasMany(Ward::class);
    }
}
