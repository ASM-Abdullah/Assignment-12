<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    // locations has One-to-Many relationship with trips.
    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}

