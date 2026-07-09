<?php

namespace App\Http\Controllers;

use App\Models\RoundTypes;

class RoundTypeController extends Controller
{
    public function index()
    {
        return view('round_type.index');
    }
}
