<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventEduproParticipants extends Model
{
    protected $table = 'event_edupro_participants';
    protected $primaryKey = 'ee_participants';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'ee_participants',
        'participant_id',
        'jury_id',
        'event_edupros',
        'created_at',
        'updated_at'
    ];

    public function participant()
    {
        return $this->belongsTo(Participants::class, 'participant_id', 'participant_id');
    }

    public function jury()
    {
        return $this->belongsTo(Juries::class, 'jury_id', 'jury_id');
    }

    public function event_edupro()
    {
        return $this->belongsTo(EventEdupros::class, 'event_edupros', 'evedupro_id');
    }
}
