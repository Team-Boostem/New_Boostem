<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamCommunity extends Model
{
    use HasFactory;

    protected $casts = [
        'team_details' => 'array',
    ];
    protected $fillable = [
        'team_details'
    ];
}
