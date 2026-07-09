<?php

namespace App\Http\Controllers;

use App\Models\Festivals;

class FestivalController extends Controller
{
    public function index()
    {
        return view('festival.index');
    }
}
