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
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($user) {
            $user->id = (string) Str::uuid();
        });
    }
}
