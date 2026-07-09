<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompetitionTypes extends Model
{
    protected $table = 'competition_types';
    protected $primaryKey = 'comptype_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'comptype_id',
        'comtype_name',
        'is_grandprix',
        'is_championship',
        'created_at',
        'updated_at'
    ];
}
