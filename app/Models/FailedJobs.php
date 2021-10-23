<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class FailedJobs extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'connection',
        'queue',
        'payload',
        'exception',
    ];

    protected $casts = [
        'failed_at' => 'datetime',
    ];
}
