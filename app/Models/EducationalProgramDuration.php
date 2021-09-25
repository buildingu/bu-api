<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalProgramDuration extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function educational_programs(): BelongsTo {
        return $this->belongsTo(EducationalProgram::class);
    }

}