<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Client;
use App\Article;
use App\DepositedArticle;
use App\Status;
use Auth;

class DepositedarticleController extends Controller
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
    }

    public function getDepositedarticles($id)
    {
        $customer = Client::findOrFail($id);

        $depositedarticles = DB::table('deposited_articles')
             ->where('client_id', '=', $customer->id)
             ->where('status', '=', 0)
             ->get();

        //$depositedarticles = DepositedArticle::all();

        //$articles = Article::with('depositedarticles')->get();

        return view('depositedarticles.index', compact('depositedarticles', 'customer', 'id'));
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
            'designation' => 'required',
            'quantity' => 'required',
        ]);

        $depositedarticle = new DepositedArticle();
        $depositedarticle->article_id = $request->input('article_id');
        $depositedarticle->designation = $request->input('designation');
        $depositedarticle->quantity = $request->input('quantity');
        $depositedarticle->client_id = $request->input('client_id');
        $depositedarticle->user_id = auth()->user()->id;

        $client = Client::findOrFail($depositedarticle->client_id);

        $article = Article::findOrFail($depositedarticle->article_id);

        $depositedarticle->article_title = $article->title;

        $depositedarticle->unit_price = $article->unit_price;

        $depositedarticle->status = 0;

        $depositedarticle->amount = $article->unit_price * $depositedarticle->quantity;

        $lastDeposit = DB::table('deposits')->orderBy('id', 'DESC')->first();

        if ($lastDeposit) {
            $depositedarticle->deposit_id = $lastDeposit->id + 1;
        } else {
            $depositedarticle->deposit_id = 1;
        }

        $depositedarticle->client_name = $client->name.' '.$client->firstname;

        $depositedarticle->save();

        //Redirect to the customers.index view and display message
        return redirect()->route('depositedarticle.index', $depositedarticle->client_id)
            ->with('success',
             'Nouvel ajouté au panier.');
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
        $depositedarticle = DepositedArticle::findOrFail($id);

        $depositedarticle->delete();

        return redirect()->route('depositedarticle.index', $depositedarticle->client_id)
            ->with('success',
             'Un article a été supprimé du panier avec succès');
    }

    public function add($id)
    {
        $customer = Client::findOrFail($id);

        //dd($customer);

        //$articles = Article::all();

        $articles = Article::orderBy('title')->get();

        $name = $customer->name.' '.$customer->firstname;

        $etats = Status::get();

        return view('depositedarticles.create', compact('customer', 'articles', 'id', 'name','etats'));
    }
}
