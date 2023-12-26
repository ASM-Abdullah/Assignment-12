<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    // trips has the Many-to-One relationship with locations.
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    // trips has the Many-to-One relationship with seat allocations.
    public function seatAllocations()
    {
        return $this->hasMany(SeatAllocation::class);
    }
}