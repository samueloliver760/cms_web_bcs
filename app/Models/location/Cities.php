<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Countries;
use App\Models\Provinces;

class Cities extends Model
{
    protected $table = 'cities';
    protected $primaryKey = 'city_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'city_id',
        'province_id',
        'country_id',
        'city_name',
        'city_type',
        'created_at',
        'updated_at'
    ];

    public function country()
    {
        return $this->belongsTo(Countries::class, 'country_id', 'country_id');
    }

    public function province()
    {
        return $this->belongsTo(Provinces::class, 'province_id', 'province_id');
    }
}
