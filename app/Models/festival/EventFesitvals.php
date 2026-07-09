<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventFesitvals extends Model
{
    protected $table = 'event_festivals';
    protected $primaryKey = 'evfestival_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'evfestival_id',
        'competition_id',
        'festival_id',
        'festival_date',
        'festival_time',
        'evfestival_desc',
        'festival_venue',
        'venue_room',
        'created_at',
        'updated_at'
    ];

    public function competition()
    {
        return $this->belongsTo(Competitions::class, 'competition_id', 'competition_id');
    }

    public function festival()
    {
        return $this->belongsTo(Festivals::class, 'festival_id', 'festival_id');
    }
}
