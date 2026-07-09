<?php

namespace App\Http\Controllers;

use App\Models\CompetitionTypes;

class CompetitionTypeController extends Controller
{
    public function index()
    {
        return view('competition_type.index');
    }
}
