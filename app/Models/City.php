<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $table = 'cities';

    protected $fillable = [
        'name',
        'state_id'
    ];

    public function states(): HasOne {
        return $this->hasOne(State::class);
    }

    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class);
    }

}