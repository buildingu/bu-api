<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResourceResourceFooter extends Model
{
    use HasFactory;

    public function resource(){
        return $this->hasMany(Resource::class);
    }

    public function resourceFooter(){
        return $this->hasOne(Resource::class);
    }
}
