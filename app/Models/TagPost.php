<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TagPost extends Model
{
    use HasFactory;

    protected $table = 'cities';

    protected $fillable = [
        'tag_id',
        'post_id'
    ];

    public function tags(): HasMany {
        return $this->hasMany(Tag::class);
    }

    public function posts(): HasMany {
        return $this->hasMany(Post::class);
    }

}
