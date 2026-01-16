<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Poli extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    /**
     * Get the doctors for the poli.
     */
    public function doctors(): HasMany
    {
        return $this->hasMany(Doctor::class);
    }
}