<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'string',
        'questions' => 'array',
        'tags' => 'array',
        'category' => 'array',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($user) {
            $user->id = (string) Str::uuid();
             
             if (!$user->tags) {
                 $user->tags = [];
             }
             if (!$user->category) {
                 $user->category = [];
             }
        });
    }
}
