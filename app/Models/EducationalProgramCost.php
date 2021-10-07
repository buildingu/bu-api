<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalProgramCost extends Model
{
    use HasFactory;

    protected $fillable = [
        'cost'
    ];

    public function educational_program(): HasManyThrough {
        return $this->hasManyThrough(EducationalProgram::class, 'cost_educational_program');
    }

}