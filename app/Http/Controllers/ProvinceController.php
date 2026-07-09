<?php

namespace App\Http\Controllers;

use App\Models\Provinces;

class ProvinceController extends Controller
{
    public function index()
    {
        return view('province.index');
    }
}
