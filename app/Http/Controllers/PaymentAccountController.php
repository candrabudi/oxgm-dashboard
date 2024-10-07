<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\PaymentAccount;
use Illuminate\Http\Request;

class PaymentAccountController extends Controller
{
    public function index()
    {
        $accounts = PaymentAccount::orderby('created_at', 'DESC')
            ->get();
        $payments = Payment::all();
        return view('paymentaccount.index', compact('accounts', 'payments'));
    }

    public function store(Request $request)
    {
        try {
            $existingPaymentAccount = PaymentAccount::where('payment_id', $request->payment_id)->first();

            if ($existingPaymentAccount && $request->account_status == 1) {
                $existingPaymentAccount->account_status = 0;
                $existingPaymentAccount->save();
            }

            $store = new PaymentAccount();
            $store->payment_id = $request->payment_id;
            $store->account_name = $request->account_name;
            $store->account_number = $request->account_number;
            $store->account_status = $request->account_status;
            $store->save();

            return redirect()->back()->with('success', 'Payment account created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create payment account: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $paymentAccount = PaymentAccount::findOrFail($id);

            $existingPaymentAccount = PaymentAccount::where('payment_id', $request->payment_id)
                ->where('id', '!=', $id)
                ->first();

            if ($existingPaymentAccount && $request->account_status == 1) {
                $existingPaymentAccount->account_status = 0;
                $existingPaymentAccount->save();
            }

            $paymentAccount->payment_id = $request->payment_id;
            $paymentAccount->account_name = $request->account_name;
            $paymentAccount->account_number = $request->account_number;
            $paymentAccount->account_status = $request->account_status;
            $paymentAccount->save();

            return redirect()->back()->with('success', 'Payment account updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update payment account: ' . $e->getMessage());
        }
    }


    public function toggleAccountStatus($id)
    {
        $account = PaymentAccount::find($id);
        if ($account) {
            // Toggle status
            $account->account_status = $account->account_status == 1 ? 0 : 1;
            $account->save();

            return redirect()->back()->with('success', 'Status akun berhasil diubah.');
        }

        return redirect()->back()->with('error', 'Akun tidak ditemukan.');
    }

}
