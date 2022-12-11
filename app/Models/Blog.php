<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'content',
        'creator',
        'creator_type',
        'category',
        'slug',
        'tags',
        'readtime',
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
        if ($this->creator_type == 'u') {
            return User::where('user_id', $this->creator)->select('user_id', 'name', 'username', 'profile_photo_path')->first();
        } elseif ($this->creator_type == 's') {
            return Community::where('id', $this->creator)->select('id', 'name', 'username', 'logo_photo_path')->first();
        }
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
