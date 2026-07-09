<?php

namespace App\Http\Controllers;

use App\Models\EventFesitvals;

class EventFestivalController extends Controller
{
    public function index()
    {
        return view('event_festival.index');
    }
}
