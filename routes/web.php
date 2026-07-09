<?php

use App\Http\Controllers\AwardController;
use App\Http\Controllers\CategoryCompetitionController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\CompetitionTypeController;
use App\Http\Controllers\CompetitionVenueController;
use App\Http\Controllers\ConductorController;
use App\Http\Controllers\EducationProgramController;
use App\Http\Controllers\EventEduproController;
use App\Http\Controllers\EventEduproParticipantController;
use App\Http\Controllers\EventFestivalController;
use App\Http\Controllers\EventScheduleController;
use App\Http\Controllers\FestivalController;
use App\Http\Controllers\JuryCompetitionController;
use App\Http\Controllers\JuryController;
use App\Http\Controllers\MedalController;
use App\Http\Controllers\ParticipantCategoryController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\RoundTypeController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\SpecialAwardController;
use App\Http\Controllers\UnparScholarshipController;
use App\Http\Controllers\VenueController;
use App\Models\CompetitionVenues;
use App\Models\EventFesitvals;
use App\Models\ParticipantCategories;
use App\Models\SpecialAwards;

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

// Award
Route::resource('/award', AwardController::class);
Route::post('/award', [AwardController::class, 'store']);

// Venue
Route::resource('/venue', VenueController::class);
Route::post('/venue', [VenueController::class, 'store']);

// Competition Type
Route::resource('/competition_type', CompetitionTypeController::class);
Route::post('/competition_type', [CompetitionTypeController::class, 'store']);

// Category
Route::resource('/category', CategoryController::class);
Route::post('/category', [CategoryController::class, 'store']);

// Conductor
Route::resource('/conductor', ConductorController::class);
Route::post('/conductor', [ConductorController::class, 'store']);

// Education Program
Route::resource('/education_program', EducationProgramController::class);
Route::post('/education_program', [EducationProgramController::class, 'store']);

// Festival
Route::resource('/festival', FestivalController::class);
Route::post('/festival', [FestivalController::class, 'store']);

// Jury
Route::resource('/jury', JuryController::class);
Route::post('/jury', [JuryController::class, 'store']);

// Round Type
Route::resource('/round_type', RoundTypeController::class);
Route::post('/round_type', [RoundTypeController::class, 'store']);

// Medal
Route::resource('/medal', MedalController::class);
Route::post('//medal', [MedalController::class, 'store']);

// Category Competition
Route::resource('/category_competition', CategoryCompetitionController::class);
Route::post('/category_competition', [CategoryCompetitionController::class, 'store']);

// Competition Venue
Route::resource('/competition_venue', CompetitionVenueController::class);
Route::post('/competition_venue', [CompetitionVenueController::class, 'store']);

// Competition 
Route::resource('/competition', CompetitionController::class);
Route::post('/competition', [CompetitionController::class, 'store']);

// Event Edupro 
Route::resource('/event_edupro', EventEduproController::class);
Route::post('/event_edupro', [EventEduproController::class, 'store']);

// Event Festival 
Route::resource('/event_festival', EventFestivalController::class);
Route::post('/event_festival', [EventFestivalController::class, 'store']);

// Event Edupro Participant 
Route::resource('/event_edupro_participant', EventEduproParticipantController::class);
Route::post('/event_edupro_participant', [EventEduproParticipantController::class, 'store']);

// Event Schedule 
Route::resource('/event_schedule', EventScheduleController::class);
Route::post('/event_schedule', [EventScheduleController::class, 'store']);

// Jury Competition 
Route::resource('/jury_competition', JuryCompetitionController::class);
Route::post('/jury_competition', [JuryCompetitionController::class, 'store']);

// Participant Category 
Route::resource('/participant_category', ParticipantCategoryController::class);
Route::post('/participant_category', [ParticipantCategoryController::class, 'store']);

// Scores 
Route::resource('/score', ScoreController::class);
Route::post('/score', [ScoreController::class, 'store']);

// Song 
Route::resource('/song', SongController::class);
Route::post('/song', [SongController::class, 'store']);

// Special Award 
Route::resource('/special_award', SpecialAwardController::class);
Route::post('/special_award', [SpecialAwardController::class, 'store']);

// Unpar Scholarship 
Route::resource('/unpar_scholarship', UnparScholarshipController::class);
Route::post('/unpar_scholarship', [UnparScholarshipController::class, 'store']);

// Datatable
Route::post('/datatable/country', [CountryController::class, 'datatable']);
Route::post('/datatable/province', [ProvinceController::class, 'datatable']);
Route::post('/datatable/city', [CityController::class, 'datatable']);
Route::post('/datatable/participant', [ParticipantController::class, 'datatable']);
Route::post('/datatable/award', [AwardController::class, 'datatable']);
Route::post('/datatable/venue', [VenueController::class, 'datatable']);
Route::post('/datatable/competition_type', [CompetitionTypeController::class, 'datatable']);
Route::post('/datatable/category', [CategoryController::class, 'datatable']);
Route::post('/datatable/conductor', [ConductorController::class, 'datatable']);
Route::post('/datatable/education_program', [EducationProgramController::class, 'datatable']);
Route::post('/datatable/venue', [VenueController::class, 'datatable']);
Route::post('/datatable/jury', [JuryController::class, 'datatable']);
Route::post('/datatable/round_type', [RoundTypeController::class, 'datatable']);
Route::post('/datatable/medal', [MedalController::class, 'datatable']);
Route::post('/datatable/category_competition', [CategoryCompetitionController::class, 'datatable']);
Route::post('/datatable/competition_venue', [CompetitionVenueController::class, 'datatable']);
Route::post('/datatable/competition', [CompetitionController::class, 'datatable']);
Route::post('/datatable/event_edupro', [EventEduproController::class, 'datatable']);
Route::post('/datatable/event_festival', [EventFestivalController::class, 'datatable']);
Route::post('/datatable/event_edupro_participant', [EventEduproParticipantController::class, 'datatable']);
Route::post('/datatable/event_schedule', [EventScheduleController::class, 'datatable']);
Route::post('/datatable/jury_competition', [JuryCompetitionController::class, 'datatable']);
Route::post('/datatable/participant_category', [ParticipantCategoryController::class, 'datatable']);
Route::post('/datatable/score', [ScoreController::class, 'datatable']);
Route::post('/datatable/song', [SongController::class, 'datatable']);
Route::post('/datatable/special_award', [SpecialAwardController::class, 'datatable']);
Route::post('/datatable/unpar_scholarship', [UnparScholarshipController::class, 'datatable']);
