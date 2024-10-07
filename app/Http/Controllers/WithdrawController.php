<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $dateFilter = $request->input('date_filter');
        $statusFilter = $request->input('account_status'); 
        
        $deposits = Transaction::with('user')
            ->whereIn('type', ['withdraw'])
            ->when($search, function ($query, $search) {
                return $query->where('trx_no', 'like', '%' . $search . '%')
                             ->orWhereHas('user', function ($query) use ($search) {
                                 $query->where('username', 'like', '%' . $search . '%');
                             });
            })
            ->when($dateFilter, function ($query) use ($dateFilter) {
                $dates = explode(' - ', $dateFilter);
                if (count($dates) === 2) {
                    $startDate = \Carbon\Carbon::createFromFormat('j M, Y', trim($dates[0]))->startOfDay();
                    $endDate = \Carbon\Carbon::createFromFormat('j M, Y', trim($dates[1]))->endOfDay();

                    $formattedStartDate = $startDate->format('Y-m-d');
                    $formattedEndDate = $endDate->format('Y-m-d');

                    
                    return $query->whereDate('created_at', '>=', $formattedStartDate)
                        ->whereDate('created_at', '<=', $formattedEndDate);
                }
            })
            ->when($statusFilter, function ($query) use ($statusFilter) {
                return $query->where('status', $statusFilter);
            })
            ->paginate(10);
    
        return view('transaction.deposit', compact('deposits', 'search', 'dateFilter', 'statusFilter'));
    }

    public function approveTransaction(Request $request, $id)
    {
        $deposit = Transaction::findOrFail($id);
        $deposit->status = 'completed';
        $deposit->save();

        return response()->json(['message' => 'Transaction approved successfully']);
    }

    public function rejectTransaction(Request $request, $id)
    {
        $deposit = Transaction::findOrFail($id);
        $deposit->status = 'rejected';
        $deposit->reason = $request->input('reason');
        $deposit->save();

        return response()->json(['message' => 'Transaction rejected successfully']);
    }
}
