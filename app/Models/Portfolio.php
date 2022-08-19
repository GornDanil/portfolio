<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'task',
        'description_col_1',
        'description_col_2',
        'intro'
    ];

    public function images(): HasMany
    {
        return $this->hasMany(Images::class, 'post_id');
    }
}
