<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function student() { 
        return $this->hasMany(Student::class, 'teacher_id', 'id');
    }

    public function teacher() {
        return $this->hasMany(QuestionCategory::class);
    }

    // public function getCompanyTeacherRelation() {
    //     return $this->belongsTo(Company::class, 'company_teachers', 'teacher_id', 'company_id');
    // }

    public function getLevelRelation() {
        return $this->belongsTo(Level::class, 'level_id', 'id');
    }

    public function getCompanyRelation() {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    public function oexExams() {
        return $this->belongsTo(Oex_exam_master::class, 'exam', 'id');
    }

    public function getTeacherRelation() {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }

    public function resultRelation() {
        return $this->belongsTo(Oex_result::class, 'id', 'user_id');
    }


}
