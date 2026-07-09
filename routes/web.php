<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ParticipantController;

Route::get('/', function () {
    return view('dashboard');
});

// Country
Route::resource('/country', CountryController::class);
Route::post('/country', [CountryController::class, 'store']);

// Province
Route::resource('/province', ProvinceController::class);
Route::post('/province', [ProvinceController::class, 'store']);

// City
Route::resource('/city', CityController::class);
Route::post('/city', [CityController::class, 'store']);

// Participant
Route::resource('/participant', ParticipantController::class);
Route::post('/participant', [ParticipantController::class, 'store']);

// Datatable
Route::post('/datatable/country', [CountryController::class, 'datatable']);
Route::post('/datatable/province', [ProvinceController::class, 'datatable']);
Route::post('/datatable/city', [CityController::class, 'datatable']);
Route::post('/datatable/participant', [ParticipantController::class, 'datatable']);
