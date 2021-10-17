<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institution extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'country_id'
    ];

    public function country(): HasOne {
        return $this->hasOne(Country::class);
    }

    public function crew(): BelongsToMany {
        return $this->belongsToMany(Crew::class, 'crew_institutions');
    }

}
