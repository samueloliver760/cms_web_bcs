<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;
use App\Models\Competitions;

class CategoryCompetitions extends Model
{
    protected $table = 'category_competitions';
    protected $primaryKey = 'catcomp_id';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'catcomp_id',
        'category_id',
        'competition_id',
        'created_at',
        'updated_at'
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'category_id');
    }

    public function competition()
    {
        return $this->belongsTo(Competitions::class, 'competition_id', 'competition_id');
    }
}
