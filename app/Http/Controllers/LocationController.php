<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;


class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return view('locations.index', compact('locations'));
    }

    public function show(Location $location)
    {
        return view('locations.show', compact('location'));
    }

    // Other CRUD methods (create, edit, update, delete) can be added as needed
}
