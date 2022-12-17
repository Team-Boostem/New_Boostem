<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;
    protected $casts = [
        'id' => 'string',
        'tags' => 'array',
    ];

    protected $fillable = [
        'title',
        'discription',
        'type',
        'creator',
        'creator_type',
        'category',
        'slug',
        'tags',
        'image',
        'active',
        'suspended',
    ];
    protected $appends = [
        'user',
    ];
    public $incrementing = false;

    public function getUserAttribute()
    {
            return User::where('user_id', $this->creator)->select('user_id', 'name', 'username', 'profile_photo_path')->first();
        
    }

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
