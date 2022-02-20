<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'name',
    ];

    public function country(): HasOne
    {
        return $this->hasOne(Country::class);
    }

    public function cities(): BelongsTo {
        return $this->belongsTo(City::class);
    }

}
