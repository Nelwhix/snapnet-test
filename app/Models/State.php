<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    /**
     * Relationship with LGA's
     *
     */
    public function lga(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Lga::class);
    }
}
