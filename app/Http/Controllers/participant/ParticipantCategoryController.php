<?php

namespace App\Http\Controllers;

use App\Models\ParticipantCategories;

class ParticipantCategoryController extends Controller
{
    public function index()
    {
        return view('participant_category.index');
    }
}
