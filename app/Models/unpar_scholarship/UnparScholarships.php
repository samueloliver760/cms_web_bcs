<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnparScholarships extends Model
{
    protected $table = 'unpar_scholarships';
    protected $primaryKey = 'scholarship_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'scholarship_id',
        'parcat_id',
        'scholarship_value',
        'created_at',
        'updated_at'
    ];

    public function parcat()
    {
        return $this->belongsTo(ParticipantCategories::class, 'parcat_id', 'parcat_id');
    }
}
