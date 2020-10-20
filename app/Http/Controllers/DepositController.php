<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CodeSuffix;
use App\DeliveryHour;
use App\Client;
use App\Deposit;
use App\Article;
use App\CheckedArticle;
use App\DepositedArticle;
use App\Status;
use App\User;
use Carbon\Carbon;
use PDF;

class DepositController extends Controller
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
        //$deposits = Deposit::all(); //Get all deposits

        $deposits = DB::table('deposits')
             ->where('status', '=', 0)
             ->orderBy('id', 'desc')
             ->get();

        return view('deposits.index')->with('deposits', $deposits);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    public function doDeposit($id)
    {
        $date = Carbon::now();

        $customer = Client::findOrFail($id);

        $lastDeposit = DB::table('deposits')->orderBy('id', 'DESC')->first();

        if ($lastDeposit) {
            $deposit_id = $lastDeposit->id + 1;
        } else {
            $deposit_id =  1;
        }

        $depositedarticles = DB::table('deposited_articles')
             ->where('client_id', '=', $id)
             ->where('deposit_id', '=', $deposit_id)
             ->get();

        $nbre = count($depositedarticles);

        $balance = DB::table('deposited_articles')
                    ->where('client_id', '=', $id)
                    ->where('deposit_id', '=', $deposit_id)
                    ->sum('amount');

        $taxe = $balance * 0.18;
        $total = $balance + $taxe;
        $name = $customer->name.' '.$customer->firstname;

        return view('deposits.create', compact('date', 'customer', 'id', 'depositedarticles',
         'balance', 'name', 'taxe', 'total', 'nbre'));
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
            'client_id' => 'required',
            //'date_retrait' => 'required',
            'amount_paid' => 'required',
        ]);

        $deposit = new Deposit();
        $data = $request->all();

        $deposit->client_id = $request->input('client_id');
        //$deposit->client_name = $request->input('client_name');

        $customer = Client::findOrFail($deposit->client_id);

        $deposit->client_name = $customer->name.' '.$customer->firstname;
        $deposit->client_email = $customer->email;
        //$deposit->client_email = 'NULL';
        $deposit->client_address = $customer->address;
        $deposit->client_phone = $customer->phone_number;
        $deposit->quantity = 0;
        $deposit->total_net = 0;
        $deposit->taxe = 0;
        $deposit->deposit_amount = 0;
        $deposit->balance = 0;
        $deposit->mode_reglement = $request->input('mode_reglement');
        $deposit->amount_paid = $request->input('amount_paid');
        if($request->input('amount_paid') != ''){
            $deposit->pay_date  = Carbon::now();
        }
        $action = $request->input('action');
        
        $heure = DeliveryHour::where('id', 1)->first();

        if($action == 'repassage_price'){
            $deposit->action = 'Repassage';
            $heure_retrait = $heure->repassage_hour;
        }elseif($action == 'lavage_price'){
            $deposit->action = 'Nettoyage Express';
            $heure_retrait = $heure->express_hour;
        }elseif($action == 'nettoyage_price'){
            $deposit->action = 'Nettoyage à sec';
            $heure_retrait = $heure->lavage_hour;
        }
        
        //$deposit->tidy = $request->input('tidy');
        if($request->input('discount') ==''){
           $deposit->discount = 0; 
        }else{
            $deposit->discount = $request->input('discount');
        }

        if($request->input('reference') != ''){
            $deposit->reference = $request->input('reference'); 
        }
        
        $deposit->left_pay = 0;
        $deposit->status = 0;

        //$check = $request->input('date_retrait');
        $check = Carbon::now()->addHours($heure_retrait);

        if((date('N', strtotime($check)) >= 7)){
            $date = Carbon::parse($check);
            $deposit->date_retrait = $date->addDays(1);
        }else{
            //$deposit->date_retrait = $request->input('date_retrait');
            $deposit->date_retrait = Carbon::parse($check);
        }

        $dt = Carbon::now();
        //Carbon::parse($dt);
        // These getters specifically return integers, ie intval()
        //$code = intval($dt->month); 
        //$deposit->deposit_code = 'LP/'.$dt->format('m/y');
        //$deposit->deposit_code = 'LP';
        $suffix = CodeSuffix::where('id', 1)->first();
        $deposit->deposit_code = $suffix->title;
        $deposit->user_id = auth()->user()->id;

        $deposit->save();

        $i = 0;
        $qte = 0;
        $total_net = 0;
        $amount = 0;
        $reste=0;
        $balance=0;
        
        foreach($data['article_id'] as $article){
            $articledeposited = Article::findOrFail($article);
            //dd($articledeposited);
            $amount = $articledeposited->$action * $data['quantity'][$i];
            $data['article_title'] = $articledeposited->title ;

            $depositedArticle = new DepositedArticle();

            $depositedArticle->article_id = $article;
            $depositedArticle->designation = $data['designation'][$i];
            $depositedArticle->quantity = $data['quantity'][$i];
            $depositedArticle->tidy = $data['tidy'][$i];
            $depositedArticle->amount = $amount;
            $depositedArticle->deposit_id = $deposit->id;
            $depositedArticle->client_id = $data['client_id'];
            $customer = Client::findOrFail($depositedArticle->client_id);
            $depositedArticle->client_name = $customer->name.' '.$customer->firstname;
            $depositedArticle->user_id = auth()->user()->id;
            $depositedArticle->article_title = $data['article_title'];
            $depositedArticle->unit_price  = $articledeposited->$action;
            $depositedArticle->status = 0;
            
            $depositedArticle->save();

             $etats = $request['etats_'.$i]; //Retrieving the etats field
            //Checking if a etat was selected
            //if($i == 1) dd($etats);
            
            if (isset($etats)) {
                    //$items = $data['etats'][$j];
                    $data_etat = [];
            
                    foreach($etats as $etat){
                        $new_etat = new CheckedArticle();
                        $etat_r = Status::where('id', '=', $etat)->firstOrFail();
                        //$user->assignRole($role_r); //Assigning role to user
                        $new_etat->deposit_id = $depositedArticle->deposit_id;
                        $new_etat->depositedarticle_id = $depositedArticle->id;
                        $new_etat->status = $etat_r->title;
                        $new_etat->client_id = $depositedArticle->client_id;
                        $new_etat->client_name = $depositedArticle->client_name;
                        $new_etat->user_id = auth()->user()->id;
                        $new_etat->save();
                        $data_etat[] = $etat_r->title;
                        
                    }
                    
                    $et = implode(',', $data_etat);
                    
                    $depositedArticle = DepositedArticle::findOrFail($new_etat->depositedarticle_id);
                    $depositedArticle->etat = $et;
                    $depositedArticle->save();

            } 

            $total_net += $amount;
            $qte += $depositedArticle->quantity;
            $i++;

            //$n = $i;

        }

        //$taxe = $total_net * 0.18;
        $taxe = 0;
        
        $total_pay = ($total_net - (($total_net * $deposit->discount)/100));

        $total = $total_pay + $taxe; 
        if($deposit->amount_paid > $total){
            $balance = $deposit->amount_paid - $total;
            $reste = 0;
        }else{
            $reste = $total - $deposit->amount_paid;
            $balance = 0;
        }


        $depositFinal = Deposit::findOrFail($deposit->id);

        $depositFinal->taxe = $taxe;
        $depositFinal->quantity = $qte;
        $depositFinal->total_net = $total_net;
        $depositFinal->deposit_amount = $total;
        $depositFinal->left_pay = $reste;
        $depositFinal->balance = $balance;
        $depositFinal->deposit_code = $deposit->id.' '.$deposit->deposit_code;

        $depositFinal->save();

        return redirect()->route('deposits.show', $deposit->id);

        /*return redirect()->route('deposits.show', $deposit->id)
            ->with('success',
             'Nouveau Dépôt enregistré avec succès.');*/
    }

    public function postDateLivraison(Request $request){
        
        $this->validate($request, [
            'deposit_id' => 'required',
            'date_retrait' => 'required',
        ]);

        $deposit = Deposit::findOrFail($request->input('deposit_id'));

        $deposit->date_retrait = $request->input('date_retrait');

        $deposit->save();

        return redirect()->route('deposits.show', $deposit->id);
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

        $deposit = Deposit::findOrFail($id); //Find deposit of id = $id

        $customer = Client::findOrFail($deposit->client_id);

         $depositedarticles = DepositedArticle::where('client_id', '=', $deposit->client_id)
                                                ->where('deposit_id', '=', $deposit->id)
                                                ->get(); 
                                                
        //$depositedarticles = $deposit->depositedarticles;
        $taches = $deposit->checkedarticles;
        $user = User::findOrFail($deposit->user_id);
        //$deposit->server = $user->name.' '.$user->firstname;
        $deposit->server = $user->firstname;
        $deposit->date_retr = $deposit->date_retrait->toDateString();
        //Carbon::setLocale('fr');
        //dd($deposit);
        setlocale(LC_TIME, 'French');
        return view('deposits.show', compact('deposit', 'customer', 'depositedarticles', 'date','taches'));
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
        $date = Carbon::now();

        $deposit = Deposit::findOrFail($id); //Find deposit of id = $id

        $depositedarticles = DB::table('deposited_articles')
             ->where('client_id', '=', $deposit->client_id)
             ->where('deposit_id', '=', $deposit->id)
             ->get();
        
        return view('deposits.edit', compact('deposit', 'depositedarticles', 'date'));
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
        $this->validate($request, [
            'client_id' => 'required',
            'client_name' => 'required',
            'quantity' => 'required',
            'discount' => 'required',
            'total_ttc' => 'required',
            'date_retrait' => 'required',
        ]);

        $deposit = Deposit::findOrFail($id);
        $deposit->client_id = $request->input('client_id');
        $deposit->client_name = $request->input('client_name');

        $customer = Client::findOrFail($deposit->client_id);

        $deposit->client_email = $customer->email;
        $deposit->client_address = $customer->address;
        $deposit->client_phone = $customer->phone_number;
        $deposit->quantity = $request->input('quantity');
        $deposit->total_net = $request->input('total_net');
        $deposit->taxe = $request->input('taxe');
        $deposit->deposit_amount = $request->input('total_ttc');
        $deposit->discount = $request->input('discount');

        $reste = $deposit->deposit_amount - $deposit->discount;

        $deposit->date_retrait = $request->input('date_retrait');
        $deposit->deposit_code = $request->input('deposit_code');
        $deposit->status = 0;

        $deposit->left_pay = $reste;
        $deposit->user_id = auth()->user()->id;

        $deposit->save();

        //Redirect to the deposits.index view and display message
        return redirect()->route('deposits.show', $deposit->id)
            ->with('success',
             'Nouvel Dépôt edité avec succès.');
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
        $deposit = Deposit::findOrFail($id);

        DepositedArticle::where('deposit_id', $id)->delete();

        $deposit->delete();

        return redirect()->route('deposits.index')
            ->with('success',
             'Dépôt supprimé avec succès');
    }

    public function generatePDF()
    {
       /* $data = ['title' => 'Welcome to HDTuto.com'];
        $pdf = PDF::loadView('deposits.pdf', $data);
  
        return $pdf->download('itsolutionstuff.pdf');*/
    }

    public function findPrice(Request $request)
    {
        $price = $request->unit;
        $data = Article::select($price)->where('id', $request->id)->first();
        //dd($data);
        return $data->$price;

    }

    public function pdfexport($id)
    {
        $deposit = Deposit::findOrFail($id); //Find deposit of id = $id

        $date = Carbon::now();

        $depositedarticles = DB::table('deposited_articles')
             ->where('client_id', '=', $deposit->client_id)
             ->where('deposit_id', '=', $deposit->id)
             ->get();

        $data = ['deposit' => $deposit,
                 'depositedarticles' => $depositedarticles,
                 'date' => $date,
        ];

        $pdf = PDF::loadView('deposits.pdf', $data);

        //return $pdf->download('facture.pdf');

        return $pdf->stream('facture.pdf');
    }
}
