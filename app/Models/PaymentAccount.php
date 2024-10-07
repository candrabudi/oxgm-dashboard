<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentAccount extends Model
{
    use HasFactory;

    public function payment()
    {
        return $this->hasOne(Payment::class, 'id', 'payment_id');
    }
}
