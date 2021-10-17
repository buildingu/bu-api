<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserStudentOpportunity extends Pivot
{
    use HasFactory, SoftDeletes;

    protected $table = 'user_student_opportunities';

    public $incrementing = true;

}