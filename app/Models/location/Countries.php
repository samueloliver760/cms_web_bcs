<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    protected $table = 'countries';
    protected $primaryKey = 'country_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'country_id',
        'country_name',
        'country_flag',
        'created_at',
        'updated_at'
    ];
}
