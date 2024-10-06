<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $fillable = [
        'provider_name',
        'provider_code',
        'provider_category',
        'provider_status',
        'product_code',
        'pri_image',
        'sec_image',
    ];
}
