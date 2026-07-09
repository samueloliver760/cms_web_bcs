<?php

namespace App\Http\Controllers;

use App\Models\Medals;

class MedalController extends Controller
{
    public function index()
    {
        return view('medal.index');
    }
}
