<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Notifications\CustomResetPasswordNotification;
use App\Notifications\CustomEmailVarificationNotification;
// Import Str
use Illuminate\Support\Str;
function getUniqueUsername($username)
{
    $user = User::where('username', $username)->first();
    if ($user) {
        $username = $username . rand(100, 999);
        return getUniqueUsername($username);
    } else {
        return $username;
    }
}

class User extends Authenticatable implements MustVerifyEmail
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
        'google_id',
        'username',
        'contact',
        'bio',
        'about',
        'dob',
        'country',
        'city',
        'state',
        'college',
        'interests',
        'skills',
        'socials',
        'profile_photo_path',
        'cover_photo_path',
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
        'id' => 'string',
        'socials' => 'array',
        'skills' => 'array',
        'interests' => 'array',
        'dob' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        //'profile_photo_url',
    ];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }
    public function getNameAttribute($value)
    {
        return ucwords($value);
    }
    // public function getDobAttribute($value)
    // {
    //     return date('d-m-Y', strtotime($value));
    // }

    public static function boot()
    {
        parent::boot();
        static::creating(function ($user) {
            $user->user_id = (string) Str::uuid();
            if (!$user->username) {
                $email = explode('@', $user->email);
                $res = $email[0];
                $username = str_replace( array( '\'', '"',',' , ';', '<', '>','.' ), 'a', $res);
                $user->username = getUniqueUsername($username);
            }
            if (!$user->profile_photo_path) {
                $user->profile_photo_path = 
                    'storage/user/profile/avtar' . rand(1, 6) . '.png';
            }
            if (!$user->cover_photo_path) {
                $user->cover_photo_path =
                'storage/user/banner/banner' . rand(1, 3) . '.png';
            }
            if (!$user->socials) {
                $user->socials = '{}';
            }
        });
    }
    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomResetPasswordNotification($token));
    }
    public function sendEmailVerificationNotification()
    {
        $this->notify(new CustomEmailVarificationNotification);
    }
    // set $user->mycommunity to the communities where $community->creator is equal to $user->user_id
    public function mycommunity()
    {
        return $this->hasMany('App\Models\Community', 'creator', 'user_id');
    }
    
    
}
