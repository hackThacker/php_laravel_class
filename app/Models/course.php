<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    /**
     * Get all of the comments for the course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function admission(): HasMany
    {
        return $this->hasMany(admission::class,);
    }
}
