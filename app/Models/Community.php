<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Community extends Model
{
    use HasFactory;
    protected $casts = [
        'id' => 'string',
        'socials' => 'array',
        'tags' => 'array',
        'field' => 'array',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($user) {
            $user->id = (string) Str::uuid();
             if (!$user->logo_photo_path) {
                 $user->logo_photo_path = 
                    'public/icons/avtar/avtar' . rand(1, 6) . '.png';
             }
            if (!$user->banner_photo_path) {
                $user->banner_photo_path =
                'public/icons/banner/banner' . rand(1, 3) . '.png';
            }
             if (!$user->tags) {
                 $user->tags = [];
             }
             if (!$user->field) {
                 $user->field = [];
             }
        });
    }
    // Get the user's profile photo URL attribute.
    //  public function setSocialsAttribute($value)
    //  {
    //      $this->attributes['socials'] = json_decode(json_encode($value));
    //  }
}
