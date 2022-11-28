<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Community;
// use App\Models\Startup;


class PageView extends Model
{
    use HasFactory;
   
    protected $table = 'page_views';

    protected $appends = [
        // 'profile_photo_url',
        'user',
        'profile',
    ];

    public function getUserAttribute()
    {
        return User::where('user_id', $this->user_id)->select('user_id', 'name', 'username', 'profile_photo_path')->first();
    }

    public function getProfileAttribute()
    {
        if ($this->page == 'user/{username}') {
            return User::where('user_id', $this->profile_id)->select('user_id', 'name', 'username', 'profile_photo_path')->first();
        } else if ($this->page == 'community/{username}') {
            return Community::where('id', $this->profile_id)->select('id', 'name', 'username', 'logo_photo_path')->first();
        // } else if ($this->page == 'startup/{username}') {
        //     return Startup::where('id', $this->profile_id)->select('id', 'name', 'username', 'logo_photo_path')->first();
        }
        return null;
    }
}
