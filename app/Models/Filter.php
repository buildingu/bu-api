<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    use HasFactory;

    public function location(){
        return $this->belongsTo(Location::class);
    }
    public function requirement(){
        return $this->belongsTo(Requrement::class);
    }
    public function type(){
        return $this->belongsTo(Type::class);
    }
    public function resource(){
        return $this->hasMany(Resource::class);
    }
}
