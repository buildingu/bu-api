<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'host',
        'duration',
        'location',
        'requirements',
        'description'
    ];

    public function educational_program_durations(): HasOne {
        return $this->hasOne(EducationalProgramDuration::class);
    }

    public function educational_program_locations(): HasOne {
        return $this->hasOne(EducationalProgramLocation::class);
    }

    public function educational_program_costs(): BelongsTo {
        return $this->belongsTo(EducationalProgramCost::class);
    }

    public function users(): BelongsToMany {
        return $this->belongsToMany(Users::class, 'user_educational_programs');
    }

}
