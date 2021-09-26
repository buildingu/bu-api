<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentOpportunity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'host',
        'duration',
        'location',
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
}
