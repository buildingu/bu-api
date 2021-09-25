<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
