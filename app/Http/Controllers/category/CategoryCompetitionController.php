<?php

namespace App\Http\Controllers;

use App\Models\CategoryCompetitions;

class CategoryCompetitionController extends Controller
{
    public function index()
    {
        return view('category_competition.index');
    }
}
