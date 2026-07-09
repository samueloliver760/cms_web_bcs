<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Venues;
use App\Models\Competitions;

class CompetitionVenues extends Model
{
    protected $table = 'competition_venues';
    protected $primaryKey = 'compvenue_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'compvenue_id',
        'competition_id',
        'venue_id',
        'created_at',
        'updated_at'
    ];

    public function venue()
    {
        return $this->belongsTo(Venues::class, 'venue_id', 'venue_id');
    }

    public function competition()
    {
        return $this->belongsTo(Competitions::class, 'competition_id', 'competition_id');
    }
}
