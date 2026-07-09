<?php

namespace App\Http\Controllers;

use App\Models\CompetitionVenues;

class CompetitionVenueController extends Controller
{
    public function index()
    {
        return view('competition_venue.index');
    }
}
