<?php

namespace App\Http\Controllers;

use App\Models\Participants;

class ParticipantController extends Controller
{

    public function index()
    {
        return view('participant.index');
    }
}
