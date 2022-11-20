<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
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
