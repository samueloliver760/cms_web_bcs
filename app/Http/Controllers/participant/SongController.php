<?php

namespace App\Http\Controllers;

use App\Models\Songs;

class SongController extends Controller
{
    public function index()
    {
        return view('song.index');
    }
}
