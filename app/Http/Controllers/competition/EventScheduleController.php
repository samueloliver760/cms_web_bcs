<?php

namespace App\Http\Controllers;


class EventScheduleController extends Controller
{
    public function index()
    {
        return view('event_schedule.index');
    }
}
