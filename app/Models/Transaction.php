<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function paymentAccount()
    {
        return $this->hasOne(PaymentAccount::class, 'id','payment_account_id');
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'id','transaction_id');
    }

    public function promotion()
    {
        return $this->hasOne(Promotion::class, 'id','promotion_id');
    }
}
