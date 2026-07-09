<?php

namespace App\Http\Controllers;

use App\Models\EducationPrograms;

class EducationProgramController extends Controller
{
    public function index()
    {
        return view('education_program.index');
    }
}
