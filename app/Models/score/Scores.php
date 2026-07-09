<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
    protected $table = 'scores';
    protected $primaryKey = 'score_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'score_id',
        'parcat_id',
        'final_score',
        'medal_id',
        'is_woc',
        'created_at',
        'updated_at'
    ];

    public function parcat()
    {
        return $this->belongsTo(ParticipantCategories::class, 'parcat_id', 'parcat_id');
    }

    public function medal()
    {
        return $this->belongsTo(Medals::class, 'medal_id', 'medal_id');
    }
}
