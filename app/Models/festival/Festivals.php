<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Festivals extends Model
{
    protected $table = 'festivals';
    protected $primaryKey = 'festival_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'festival_id',
        'festival_name',
        'festival_desc',
        'created_at',
        'updated_at'
    ];
}
