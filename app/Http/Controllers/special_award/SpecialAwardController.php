<?php

namespace App\Http\Controllers;

use App\Models\SpecialAwards;

class SpecialAwardController extends Controller
{
    public function index()
    {
        return view('special_award.index');
    }
}
