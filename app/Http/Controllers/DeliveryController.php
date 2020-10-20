<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Deposit;
use App\DepositedArticle;
use App\Delivery;
use App\Client;
use App\User;
use Illuminate\Support\Facades\DB;
use PDF;

class DeliveryController extends Controller
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
        $deliveries = Delivery::all(); //Get all deliveries

        return view('deliveries.index')->with('deliveries', $deliveries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'quantity' => 'required',
            'discount' => 'required',
            'deposit_amount' => 'required',
            'date_depot' => 'required',
            'date_retrait' => 'required',
        ]);

        $tmp = 0;
        $tmp1 = 0;
        $reste = 0;

        $deposit_id = $request->input('deposit_id');

        $tmp = $request->input('left_pay');

        $tmp1 = $request->input('amount_paid');

        $reste = $tmp - $tmp1;

        if($reste == 0){

        $delivery = new Delivery();
        $delivery->client_id = $request->input('client_id');
        //$delivery->client_name = $request->input('client_name');

        $customer = Client::findOrFail($delivery->client_id);

        $delivery->client_name = $customer->name.' '.$customer->firstname;
        $delivery->client_email = $customer->email;
        $delivery->client_address = $customer->address;
        $delivery->client_phone = $customer->phone_number;
        $delivery->quantity = $request->input('quantity');
        $delivery->deposit_amount = $request->input('deposit_amount');
        $delivery->discount = $request->input('discount');
        $delivery->amount_paid = $request->input('amount_paid');
        

        $left_pay = $request->input('left_pay');

        $reste = $left_pay - $delivery->amount_paid;

        $delivery->left_pay = $reste;

        $delivery->deposit_date = $request->input('date_depot');
        $delivery->date_retrait = $request->input('date_retrait');
        $delivery->deposit_id = $request->input('deposit_id');
        $delivery->deposit_code = $request->input('deposit_code');
        $delivery->delivery_code = 'LP';
        $delivery->status = 0;
        $delivery->user_id = auth()->user()->id;

        $deposit = Deposit::where('id', $delivery->deposit_id)->first();

        if($request->input('amount_paid') > 0){
            $deposit->leftpay_date  = Carbon::now();
        }

        if($request->input('mode_reglement') == ''){
            $delivery->mode_reglement  = $deposit->mode_reglement;
        }else{
            $delivery->mode_reglement  = $request->input('mode_reglement');
        }

        if($request->input('reference') != ''){
            $delivery->reference = $request->input('reference'); 
        }

        $deposit->status = 1;
        $deposit->left_pay = 0;
        $deposit->save();

        DepositedArticle::where('deposit_id', $delivery->deposit_id)
                        ->update([
                                'status' => 2,
                            ]);

        $delivery->save();

        $delivery = Delivery::findOrFail($delivery->id);
        $delivery->delivery_code = $delivery->id.' '.$delivery->delivery_code;
        $delivery->save();
        //Redirect to the deliveries.index view and display message
        return redirect()->route('deliveries.show', $delivery->id)
            ->with('success',
             'Nouveau retrait enregistré avec succès.');

        } else {

            return redirect()->route('delivery.create', $deposit_id)
            ->with('error',
             'Commande non soldée! Vous ne pouvez donc pas effectuer ce retrait.');

        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $date = Carbon::now();

        $delivery = Delivery::findOrFail($id); //Find deposit of id = $id
        $deposit = Deposit::findOrFail($delivery->deposit_id);
        $user = User::findOrFail($delivery->user_id);
        //$deposit->server = $user->name.' '.$user->firstname;
        $delivery->server = $user->firstname;
        $delivery->deposit_date = $deposit->created_at;
        $delivery->action = $deposit->action;
        $delivery->deposit_id = $deposit->id;

        $depositedarticles = DB::table('deposited_articles')
             ->where('client_id', '=', $delivery->client_id)
             ->where('deposit_id', '=', $delivery->deposit_id)
             ->get();

        return view('deliveries.show', compact('delivery', 'depositedarticles', 'date'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    public function add($id)
    {
        $deposit = Deposit::findOrFail($id);

        $date_now = Carbon::now()->toDateString();

        $date = $deposit->created_at->toDateString();

        return view('deliveries.create', compact('deposit', 'date', 'date_now'));
    }

    public function generatePDF($id)
    {
        $delivery = Delivery::findOrFail($id); //Find deposit of id = $id

        $date = Carbon::now();

        $depositedarticles = DB::table('deposited_articles')
             ->where('client_id', '=', $delivery->client_id)
             ->where('deposit_id', '=', $delivery->deposit_id)
             ->get();

        $data = ['delivery' => $delivery,
                 'depositedarticles' => $depositedarticles,
                 'date' => $date,
        ];

        $pdf = PDF::loadView('deliveries.pdf', $data);

        return $pdf->download('deliveryInvoice.pdf');
    }
}
