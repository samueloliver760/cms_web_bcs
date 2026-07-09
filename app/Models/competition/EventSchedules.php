<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventSchedules extends Model
{
    protected $table = 'event_schedules';
    protected $primaryKey = 'eventschedule_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'eventschedule_id',
        'schedule_name',
        'schedule_desc',
        'competition_id',
        'venue_room',
        'schedule_date',
        'start_time',
        'end_time',
        'is_active',
        'event_venue',
        'created_at',
        'updated_at'
    ];

    public function competition()
    {
        return $this->belongsTo(Competitions::class, 'competition_id', 'competition_id');
    }

    public function event_venue()
    {
        return $this->belongsTo(CompetitionVenues::class, 'compvenue_id', 'event_venue');
    }
}
