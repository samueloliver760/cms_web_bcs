<?php

namespace App\Http\Controllers;

use App\Models\EventEduproParticipants;

class EventEduproParticipantController extends Controller
{
    public function index()
    {
        return view('event_edupro_participant.index');
    }
}
