<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class Crew extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        //'first_name',
        //'last_name',
        'position',
        'education_level'
    ];

    public function institutions(): HasManyThrough {
        return $this->hasManyThrough(Institutions::class, 'crew_institutions');
    }
    public function posts(): HasManyThrough {
        return $this->hasManyThrough(Post::class, 'author_post');
    }
}
