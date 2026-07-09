<?php

namespace App\Http\Controllers;

use App\Models\Juries;

class JuryController extends Controller
{
    public function index()
    {
        return view('jury.index');
    }
}
