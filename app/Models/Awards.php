<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Awards extends Model
{
    protected $table = 'awards';
    protected $primaryKey = 'award_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'award_id',
        'award_name',
        'created_at',
        'updated_at'
    ];
}
