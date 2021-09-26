<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentOpportunitySeason extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function student_opportunities(): BelongsToMany {
        return $this->belongsToMany(StudentOpportunity::class);
    }
}
