<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable = [
        'game_type_id',
        'provider_id',
        'provider_code',
        'game_code',
        'game_name',
        'game_image',
        'game_type',
        'game_status',
        'game_image',
    ];
}
