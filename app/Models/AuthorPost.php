<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AuthorPost extends Model
{
    use HasFactory;

    protected $table = 'cities';

    protected $fillable = [
        'crew_id',
        'post_id'
    ];

    public function crews(): BelongsToMany {
        return $this->belongsToMany(Crew::class);
    }

    public function posts(): HasMany {
        return $this->hasMany(Post::class);
    }
}
