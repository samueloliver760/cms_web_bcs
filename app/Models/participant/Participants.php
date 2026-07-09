<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cities;

class Participants extends Model
{
    protected $table = 'participants';
    protected $primaryKey = 'participant_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'participant_id',
        'participant_name',
        'city_id',
        'created_at',
        'updated_at'
    ];

    public function city()
    {
        return $this->belongsTo(Cities::class, 'city_id', 'city_id');
    }
}
