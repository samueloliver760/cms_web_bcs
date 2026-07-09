<?php

namespace App\Http\Controllers;

use App\Models\Scores;

class ScoreController extends Controller
{
    public function index()
    {
        return view('score.index');
    }
}
