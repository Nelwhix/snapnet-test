<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;

    protected $fillable = [
        "fullName",
        "gender",
        'address',
        "phone"
    ];

    public function ward() {
        return $this->belongsTo(Ward::class);
    }

    public function scopeFilter($query, array $filters) {
        if ($filters['search'] ?? false) {
            $query->where('fullName', 'like', '%' . request('search') . '%');
        }
    }
}
