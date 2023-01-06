<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class EventRegistration extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'string',
        'basic_answers' => 'array',
        'answers' => 'array',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($user) {
            $user->id = (string) Str::uuid();
            
        });
    }
}
