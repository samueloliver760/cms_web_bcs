<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medals extends Model
{
    protected $table = 'medals';
    protected $primaryKey = 'medal_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'medal_id',
        'medal_name',
        'score_format',
        'score_lower',
        'score_higher',
        'created_at',
        'updated_at'
    ];
}
