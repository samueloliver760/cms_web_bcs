<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecialAwards extends Model
{
    protected $table = 'special_awards';
    protected $primaryKey = 'sa_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'sa_id',
        'sa_winner',
        'competition_id',
        'choir',
        'award_id',
        'created_at',
        'updated_at'
    ];

    public function award()
    {
        return $this->belongsTo(Awards::class, 'award_id', 'award_id');
    }

    public function choir()
    {
        return $this->belongsTo(Participants::class, 'choir', 'participant_id');
    }

    public function competition()
    {
        return $this->belongsTo(Competitions::class, 'competition_id', 'competition_id');
    }
}
