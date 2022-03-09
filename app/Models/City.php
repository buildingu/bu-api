<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class City extends Model
{
    use HasFactory;

    public $timestamps=false;
    protected $table = 'cities';

    protected $fillable = [
        'name',
        'state_id'
    ];

    public function state(): BelongsTo {
        return $this->belongsTo(State::class);
    }

    public function users(): BelongsToMany {
        return $this->belongsToMany(User::class);
    }

}
