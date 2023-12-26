<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SeatAllocation;


class SeatAllocationController extends Controller
{
    public function index()
    {
        $seatAllocations = SeatAllocation::all();
        return view('seat_allocations.index', compact('seatAllocations'));
    }

    public function show(SeatAllocation $seatAllocation)
    {
        return view('seat_allocations.show', compact('seatAllocation'));
    }

    // Other CRUD methods (create, edit, update, delete) can be added as needed
}
