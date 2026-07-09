<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationPrograms extends Model
{
    protected $table = 'education_programs';
    protected $primaryKey = 'edupro_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'edupro_id',
        'edupro_name',
        'edupro_desc',
        'is_participant',
        'is_public',
        'created_at',
        'updated_at'
    ];
}
