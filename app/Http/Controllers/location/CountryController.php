<?php

namespace App\Http\Controllers;

use App\Models\Countries;

class CountryController extends Controller
{

    public function index()
    {
        return view('country.index');
    }
}
