<?php

namespace App\Http\Controllers;

use App\Models\UnparScholarships;

class UnparScholarshipController extends Controller
{
    public function index()
    {
        return view('unpar_scholarship.index');
    }
}
