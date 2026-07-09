<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competitions extends Model
{
    protected $table = 'competitions';
    protected $primaryKey = 'competition_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'competition_id',
        'competition_fullname',
        'competition_slug',
        'competition_year',
        'competition_start',
        'competition_end',
        'is_finished',
        'competition_website',
        'is_active',
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
