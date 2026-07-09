<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cities;

class Venues extends Model
{
    protected $table = 'venues';
    protected $primaryKey = 'venue_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'venue_id',
        'venue_name',
        'city_id',
        'venue_photos',
        'venue_maps',
        'venue_fulladdress',
        'venue_acronym',
        'venue_type',
        'created_at',
        'updated_at'
    ];

    public function city()
    {
        return $this->belongsTo(Cities::class, 'city_id', 'city_id');
    }
}
