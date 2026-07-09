<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventEdupros extends Model
{
    protected $table = 'event_edupros';
    protected $primaryKey = 'evedupro_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'evedupro_id',
        'competition_id',
        'edupro_id',
        'edupro_date',
        'edupro_time',
        'evedupro_desc',
        'edupro_venue',
        'venue_room',
        'created_at',
        'updated_at'
    ];

    public function competition()
    {
        return $this->belongsTo(Competitions::class, 'competition_id', 'competition_id');
    }

    public function edupro()
    {
        return $this->belongsTo(EducationPrograms::class, 'edupro_id', 'edupro_id');
    }
}
