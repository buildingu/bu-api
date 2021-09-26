<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalAccessToken extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'tokenable',
        'name',
        'token',
    ];

    protected $casts = [
        'last_used_at' => 'datetime',
    ];
}
