<?php

namespace App\Http\Controllers;

use App\Models\Cities;

class CityController extends Controller
{
    public function index()
    {
        return view('city.index');
    }
}
