<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;
    const ADMIN_ROLE = 1;
    const DOC_ROLE = 2;
    const PATIENT_ROLE = 3;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ]; 

    public function adminDetails()
    {
        return $this->hasOne(AdminDetails::class, 'id');
    }

    public function patientDetails()
    {
        return $this->hasOne(PatientDetails::class, 'id');
    }

    public function doctorDetails()
    {
        return $this->hasOne(DoctorDetails::class, 'id');
    }

    // logs
    public function logs(): MorphMany
    {
        return $this->morphMany (Log::class,"logable");
    }

}
