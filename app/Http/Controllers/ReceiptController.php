<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Client;
use App\Deposit;
use App\Article;
use App\DepositedArticle;
use Carbon\Carbon;

class ReceiptController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function searchReceipt()
    {
        return view('receipts.search');
    }

    public function receipeNewToDay()
    {
        $total=0;

        $deposits = Deposit::whereDate('created_at', Carbon::today())
                            ->whereDate('pay_date', Carbon::today())
                            ->get();

        foreach($deposits as $deposit){
            $total += $deposit->amount_paid;
        }
        return view('receipts.receipeNewToDay', compact('deposits', 'total'));
    }


    public function receipeAllToDay()
    {
        $total=0;

        $deposits = Deposit::whereDate('pay_date', Carbon::today())
                            ->orWhereDate('leftpay_date', Carbon::today())
                            ->get();

        foreach($deposits as $deposit){
            $total += $deposit->amount_paid;
        }

        return view('receipts.receipeAllToDay', compact('deposits', 'total'));
    }

    public function searchLeftpay()
    {
        return view('receipts.searchleftpay');
    }

    public function getReceipt()
    {
        return view('receipts.index');
    }

    public function getLeftpay()
    {
        return view('receipts.resultsLeftpay');
    }

    public function postReceipt(Request $request)
    {
        $this->validate($request, [
            'date_debut' => 'required',
            'date_fin' => 'required',
        ]);

        $date_debut = $request->input('date_debut');
        $date_fin = $request->input('date_fin');
        $total=0;

        if (($date_debut != '') && ($date_fin != '')) {
            $deposits = Deposit::select('deposits.*')
                                    ->whereBetween('created_at', [$date_debut, $date_fin])
                                    ->where('left_pay', '=', 0)
                                    ->get();
            
            foreach($deposits as $deposit){
                $total += $deposit->deposit_amount;
            }

                return view('receipts.index', compact('deposits', 'total'));
        }
    }


    public function postLeftpay(Request $request)
    {
        $this->validate($request, [
            'date_debut' => 'required',
            'date_fin' => 'required',
        ]);

        $date_debut = $request->input('date_debut');
        $date_fin = $request->input('date_fin');
        $date = Carbon::now()->toDateString();
        $total=0;

        if (($date_debut != '') && ($date_fin != '')) {
            $deposits = Deposit::select('deposits.*')
                                    ->whereBetween('created_at', [$date_debut, $date_fin])
                                    ->where('left_pay', '>', 0)
                                    ->get();
            
            foreach($deposits as $deposit){
                $total += $deposit->left_pay;
            }

                return view('receipts.resultsLeftpay', compact('deposits', 'total'));
        }
    }
}
