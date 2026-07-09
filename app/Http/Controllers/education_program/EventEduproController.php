<?php

namespace App\Http\Controllers;

use App\Models\EventEdupro;

class EventEduproController extends Controller
{
    public function index()
    {
        return view('event_edupro.index');
    }
}
