<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('payment.index', compact('payments'));
    }

    public function generatePayment()
    {
        $payment_methods = [
            ['payment_code' => 'BCA', 'payment_name' => 'Bank Central Asia', 'payment_type' => 'bank'],
            ['payment_code' => 'BNI', 'payment_name' => 'Bank Negara Indonesia', 'payment_type' => 'bank'],
            ['payment_code' => 'BRI', 'payment_name' => 'Bank Rakyat Indonesia', 'payment_type' => 'bank'],
            ['payment_code' => 'MANDIRI', 'payment_name' => 'Bank Mandiri', 'payment_type' => 'bank'],
            ['payment_code' => 'CIMB', 'payment_name' => 'CIMB Niaga', 'payment_type' => 'bank'],
            ['payment_code' => 'PERMATA', 'payment_name' => 'Bank Permata', 'payment_type' => 'bank'],
            ['payment_code' => 'BSI', 'payment_name' => 'Bank Syariah Indonesia', 'payment_type' => 'bank'],
            ['payment_code' => 'TELKOMSEL', 'payment_name' => 'Telkomsel', 'payment_type' => 'pulsa'],
            ['payment_code' => 'INDOSAT', 'payment_name' => 'Indosat Ooredoo', 'payment_type' => 'pulsa'],
            ['payment_code' => 'XL', 'payment_name' => 'XL Axiata', 'payment_type' => 'pulsa'],
            ['payment_code' => 'SMARTFREN', 'payment_name' => 'Smartfren', 'payment_type' => 'pulsa'],
            ['payment_code' => 'THREE', 'payment_name' => '3 (Tri)', 'payment_type' => 'pulsa'],
            ['payment_code' => 'GOPAY', 'payment_name' => 'GoPay', 'payment_type' => 'ewallet'],
            ['payment_code' => 'OVO', 'payment_name' => 'OVO', 'payment_type' => 'ewallet'],
            ['payment_code' => 'DANA', 'payment_name' => 'DANA', 'payment_type' => 'ewallet'],
            ['payment_code' => 'LINKAJA', 'payment_name' => 'LinkAja', 'payment_type' => 'ewallet'],
            ['payment_code' => 'SHOPEEPAY', 'payment_name' => 'ShopeePay', 'payment_type' => 'ewallet'],
            ['payment_code' => 'QRIS_BCA', 'payment_name' => 'QRIS BCA', 'payment_type' => 'qris'],
            ['payment_code' => 'QRIS_BNI', 'payment_name' => 'QRIS BNI', 'payment_type' => 'qris'],
            ['payment_code' => 'QRIS_MANDIRI', 'payment_name' => 'QRIS Mandiri', 'payment_type' => 'qris'],
            ['payment_code' => 'QRIS_OVO', 'payment_name' => 'QRIS OVO', 'payment_type' => 'qris'],
            ['payment_code' => 'QRIS_GOPAY', 'payment_name' => 'QRIS GoPay', 'payment_type' => 'qris'],
        ];
    
        foreach ($payment_methods as $pm) {
            Payment::firstOrCreate(
                ['payment_code' => $pm['payment_code']],
                [
                    'payment_name' => $pm['payment_name'],
                    'payment_type' => $pm['payment_type'],
                    'payment_status' => 1,
                ]
            );
        }

        return redirect()->back();
    }
}
