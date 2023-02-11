<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilterResourceType extends Model
{
    use HasFactory;

    public function filter(){
        return $this->hasMany(Filter::class);
    }

    public function resourceType(){
        return $this->hasMany(ResourceType::class);
    }
}
