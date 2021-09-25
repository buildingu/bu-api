<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalProgramCost extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id',
        'cost'
    ];

    public function educational_program(): HasOne {
        return $this->hasOne(EducationalProgram::class);
    }

}