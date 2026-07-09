<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CompetitionTypes;

class Categories extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'category_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'category_id',
        'comptype_id',
        'category_name',
        'description',
        'category_code',
        'table_code',
        'created_at',
        'updated_at'
    ];

    public function comptype()
    {
        return $this->belongsTo(CompetitionTypes::class, 'comptype_id', 'comptype_id');
    }
}
