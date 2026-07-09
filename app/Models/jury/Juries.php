<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Juries extends Model
{
    protected $table = 'juries';
    protected $primaryKey = 'jury_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'jury_id',
        'jury_name',
        'country_id',
        'jury_photo',
        'created_at',
        'updated_at'
    ];

    public function country()
    {
        return $this->belongsTo(Countries::class, 'country_id', 'country_id');
    }
}
