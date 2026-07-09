<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParticipantCategories extends Model
{
    protected $table = 'participant_categories';
    protected $primaryKey = 'parcat_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'parcat_id',
        'register_id',
        'participant_id',
        'conductor_id',
        'competition_id',
        'category_id',
        'roundtype_id',
        'perform_order',
        'is_to_grandprix',
        'is_to_championship',
        'is_gp_winner',
        'is_active',
        'is_complete',
        'comptype_id',
        'conductor_sub',
        'schedule_id',
        'created_at',
        'updated_at'
    ];

    public function participant()
    {
        return $this->belongsTo(Participants::class, 'participant_id', 'participant_id');
    }

    public function conductor()
    {
        return $this->belongsTo(Conductors::class, 'conductor_id', 'conductor_id');
    }

    public function conductor_sub()
    {
        return $this->belongsTo(Conductors::class, 'conductor_sub', 'conductor_id');
    }

    public function competition()
    {
        return $this->belongsTo(Competitions::class, 'competition_id', 'competition_id');
    }

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'category_id');
    }

    public function roundtype()
    {
        return $this->belongsTo(RoundTypes::class, 'roundtype_id', 'roundtype_id');
    }

    public function comptype()
    {
        return $this->belongsTo(CompetitionTypes::class, 'comptype_id', 'comptype_id');
    }

    public function schedule()
    {
        return $this->belongsTo(EventSchedules::class, 'schedule_id', 'eventschedule_id');
    }
}
