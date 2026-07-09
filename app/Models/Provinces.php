<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Countries;

class Provinces extends Model
{
    protected $table = 'provinces';
    protected $primaryKey = 'province_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'province_id',
        'country_id',
        'province_name',
        'created_at',
        'updated_at'
    ];

    public function country()
    {
        return $this->belongsTo(Countries::class, 'country_id', 'country_id');
    }
}
