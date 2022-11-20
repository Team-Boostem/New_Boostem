<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Survey extends Model
{
    use HasFactory;
    public static function boot()
    {
        parent::boot();
        static::creating(function ($user) {
            $user->id = (string) Str::uuid();
        });
    }
}
