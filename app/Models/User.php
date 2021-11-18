<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        // 'first_name',
        // 'last_name',
        // 'address',
        // 'phone',
        'email',
        'password',
        // 'education_id',
        // 'gender_id',
        // 'city_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*
    public function education_levels(): HasOne {
        return $this->hasOne(EducationLevel::class);
    }

    public function genders(): HasOne {
        return $this->hasOne(Gender::class);
    }

    public function cities(): HasOne {
        return $this->hasOne(City::class);
    }

    public function educational_programs(): HasManyThrough {
        return $this->hasManyThrough(EducationalProgram::class, 'user_educational_programs');
    }

    public function funding_options(): HasManyThrough {
        return $this->hasManyThrough(FundingOption::class, 'user_funding_options');
    }
    */

    public function student_opportunities(): HasManyThrough {
        return $this->hasManyThrough(StudentOpportunity::class, 'user_student_opportunities');
    }
}
