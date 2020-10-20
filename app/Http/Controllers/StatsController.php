<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Client;
use App\Deposit;
use App\Article;
use App\DepositedArticle;
use Carbon\Carbon;

class StatsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stats.search');
    }

    public function getSearch()
    {
        return view('stats.index');
    }

    public function range()
    {
        return view('stats.range');
    }

    public function sendData(Request $request)
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
                                    ->orderBy('deposit_amount', 'desc')
                                    ->get();
            
            foreach($deposits as $deposit){
                $total += $deposit->deposit_amount;
            }

                return view('stats.response', compact('deposits', 'total'));
        }
    }

    public function postSearch(Request $request)
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
                                    ->get();
            
            foreach($deposits as $deposit){
                $total += $deposit->deposit_amount;
            }

                return view('stats.index', compact('deposits', 'total'));
        }
    }

    public function totake()
    {
        $date = Carbon::now()->toDateString();
        return view('stats.totake',compact('date'));
    }

    public function getTotake()
    {
        return view('stats.answers');
    }

    public function postTotake(Request $request)
    {
        $this->validate($request, [
            'date_totake' => 'required',
        ]);

        $date_totake = $request->input('date_totake');
        $deposits = Deposit::where('date_retrait', '=', $date_totake)
                            ->get();
        //return view('stats.answer', compact('deposits'));

        if ($deposits) {
            return view('stats.answers', compact('deposits'));
        }

        return view('stats.answers')->withMessage('error');
    }

    public function search(Request $request){
        // check if ajax request is coming or not
        if($request->ajax()) {
            $query = $request->get('customer');
            // select country name from database
            $data = DB::table('clients')
                            ->where('name', 'like', $query.'%')
                            ->orWhere('firstname', 'like', $query.'%')
                            ->get();
            // declare an empty array for output
            $output = '';
            // if searched countries count is larager than zero
            if (count($data) > 0) {
                // concatenate output to the array
                $output = '<ul class="list-group" style="display: block; position: relative; z-index: 1">';
                // loop through the result array
                foreach ($data as $row){
                    // concatenate output to the array
                    $output .= '<li class="list-group-item" data-id="'.$row->id.'">'.$row->name.' '.$row->firstname.'</li>';
                }
                // end of output
                $output .= '</ul>';
            }
            else {
                // if there's no matching results according to the input
                $output .= '<li class="list-group-item">'.'No results'.'</li>';
            }
            // return output result array
            return $output;
        }
    }

    public function getCustomerDeposit()
    {
        return view('stats.customer');
    }

    public function postCustomerDeposit(Request $request)
    {
        $this->validate($request, [
            'customer_id' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
        ]);

        $customer_id = $request->input('customer_id');
        $date_debut = $request->input('date_debut');
        $date_fin = $request->input('date_fin');
        $date = Carbon::now()->toDateString();

        if (($date_debut != '') && ($date_fin != '')) {
            $deposits = Deposit::where('client_id', '=', $customer_id)
                                    ->whereBetween('created_at', [$date_debut, $date_fin])
                                    ->orderBy('id', 'desc')
                                    ->get();

            return view('stats.customerDeposits', compact('deposits'));
        }
        //return view('stats.customerDeposits');
    }

    public function getSaleDay()
    {
        $date_now = Carbon::now()->toDateTimeString();
        $date = Carbon::now()->subDays(1)->toDateTimeString();
        $total = 0;
        $nbre = 0;
        //dd($date);
        $deposits = Deposit::where( 'created_at', '>=', Carbon::now()->subDays(1))
                            ->get();
    
        foreach($deposits as $deposit){
            $total += $deposit->amount_paid;
            $nbre ++;
        }
        return view('stats.saleday', compact('date_now','date','total','nbre','deposits'));
    }
}
