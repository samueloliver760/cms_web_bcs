<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{
    protected $table = 'songs';
    protected $primaryKey = 'song_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'song_id',
        'parcat_id',
        'song1_title',
        'song1_composer',
        'song2_title',
        'song2_composer',
        'created_at',
        'updated_at'
    ];

    public function parcat()
    {
        return $this->belongsTo(ParticipantCategories::class, 'parcat_id', 'parcat_id');
    }
}
