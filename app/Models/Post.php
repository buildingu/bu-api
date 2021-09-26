<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'written_date',
        'comment'
    ];

    public function crew(): BelongsToMany {
        return $this->belongsToMany(Crew::class, 'author_post');
    }
    public function tags(): BelongsToMany {
        return $this->belongsToMany(TagPost::class, 'tag_post');
    }

}
