<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JuryCompetitions extends Model
{
    protected $table = 'jury_competitions';
    protected $primaryKey = 'jury_comp_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'jury_comp_id',
        'jury_id',
        'competition_id',
        'is_active',
        'created_at',
        'updated_at'
    ];

    public function jury()
    {
        return $this->belongsTo(Juries::class, 'jury_id', 'jury_id');
    }

    public function competition()
    {
        return $this->belongsTo(Competitions::class, 'competition_id', 'competition_id');
    }
}
