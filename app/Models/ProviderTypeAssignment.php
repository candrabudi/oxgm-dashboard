<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderTypeAssignment extends Model
{
    use HasFactory;
    protected $fillable = [
        'provider_id',
        'game_type_code_id',
    ];
}
