<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country_id'
    ];

    public function country(): HasOne {
        return $this->hasOne(Country::class);
    }

    public function crew(): BelongsTo {
        return $this->belongsTo(Crew::class);
    }

}
