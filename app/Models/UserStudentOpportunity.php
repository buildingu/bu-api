<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserStudentOpportunity extends Pivot
{
    use HasFactory;

    protected $table = 'user_student_opportunities';

    public $incrementing = true;

}