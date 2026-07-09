<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoundTypes extends Model
{
    protected $table = 'round_types';
    protected $primaryKey = 'roundtype_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'roundtype_id',
        'roundtype_name',
        'created_at',
        'updated_at'
    ];
}
