<?php

namespace App\Http\Controllers;

use App\Models\Venues;

class VenueController extends Controller
{
    public function index()
    {
        return view('venue.index');
    }
}
