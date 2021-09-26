<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Crew extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'quote',
        'position',
        'education_level',
        'institution_id'
    ];

    public function institutions(): HasOne {
        return $this->hasOne(Institutions::class);
    }
    public function posts(): HasManyThrough {
        return $this->hasManyThrough(Post::class, 'author_post');
    }
}
