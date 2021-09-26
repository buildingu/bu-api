<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundingOptionsDemographic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function funding_options(): BelongsToMany {
        return $this->belongsToMany(FundingOption::class);
    }
}
