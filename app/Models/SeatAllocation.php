<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatAllocation extends Model
{
    // seat allocations has the Many-to-One relationship with trips.
    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    // seat allocations has the Many-to-One relationship with users.
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
