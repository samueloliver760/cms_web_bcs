<?php

namespace App\Http\Controllers;

use App\Models\Awards;

class AwardController extends Controller
{
    public function index()
    {
        return view('award.index');
    }
}
