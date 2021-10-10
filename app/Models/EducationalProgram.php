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
        'requirements',
        'description',
        'duration_id',
        'location_id'
    ];

    public function educational_program_durations(): HasOne {
        return $this->hasOne(EducationalProgramDuration::class);
    }

    public function educational_program_locations(): HasOne {
        return $this->hasOne(EducationalProgramLocation::class);
    }

    public function educational_program_costs(): BelongsToMany {
        return $this->belongsToMany(EducationalProgramCost::class, 'cost_educational_program');
    }

    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class, 'user_educational_programs');
    }

}
