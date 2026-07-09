<?php

namespace App\Http\Controllers;

use App\Models\JuryCompetitions;

class JuryCompetitionController extends Controller
{
    public function index()
    {
        return view('jury_competition.index');
    }
}
