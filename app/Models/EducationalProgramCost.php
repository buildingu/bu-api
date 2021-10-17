<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EducationalProgramCost extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'cost'
    ];

    public function educational_program(): HasManyThrough {
        return $this->hasManyThrough(EducationalProgram::class, 'cost_educational_program');
    }

}