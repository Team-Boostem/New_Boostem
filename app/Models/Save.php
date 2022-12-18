<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Save extends Model
{
    use HasFactory;
    public static function boot()
    {
        parent::boot();
        static::creating(function ($event) {
            if (!$event->id) {
                $event->id = Str::uuid();
            }
        });
    }
}
