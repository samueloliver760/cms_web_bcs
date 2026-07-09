<?php

namespace App\Http\Controllers;

use App\Models\Conductors;

class ConductorController extends Controller
{
    public function index()
    {
        return view('conductor.index');
    }
}
