<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conductors extends Model
{
    protected $table = 'conductors';
    protected $primaryKey = 'conductor_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'conductor_id',
        'conductor_name',
        'created_at',
        'updated_at'
    ];
}
