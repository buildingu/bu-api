<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentOpportunity extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'host',
        'duration',
        'requirements',
        'description',
        'cost',
        'timeframe_id',
        'location_id',
        'type_id',
        'season_id',
        'is_remote',
        'is_university'
    ];

    public function student_opportunity_timeframe(): HasOne {
        return $this->hasOne(StudentOpportunityTimeframe::class);
    }
    public function student_opportunity_location(): HasOne {
        return $this->hasOne(StudentOpportunityLocation::class);
    }
    public function student_opportunity_type(): HasOne {
        return $this->hasOne(StudentOpportunityType::class);
    }
    public function student_opportunity_season(): HasOne {
        return $this->hasOne(StudentOpportunitySeason::class);
    }
    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class, 'user_student_opportunities');
    }
}
