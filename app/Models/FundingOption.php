<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundingOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sponsor',
        'type',
        'eligibility',
        'deadline',
        'description',
        'school_id',
        'financial_id',
        'demographic_id',
    ];

    public function funding_option_school(): HasOne {
        return $this->hasOne(FundingOptionSchool::class);
    }
    public function funding_option_financial_need(): HasOne {
        return $this->hasOne(FundingOptionFinancialNeed::class);
    }
    public function funding_option_demographic(): HasOne {
        return $this->hasOne(FundingOptionsDemographic::class);
    }
    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class, 'user_funding_options');
    }
}
