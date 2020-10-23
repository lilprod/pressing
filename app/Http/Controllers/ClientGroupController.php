<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoyalGroup;
use App\ClientGroup;
use App\Client;

class ClientGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientgroups = ClientGroup::all();

        return view('clientgroups.index')->with('clientgroups', $clientgroups);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loyalgroups = LoyalGroup::all()->pluck('title', 'rate','id');

        $clients = Client::all()->pluck('full_name','id');

        return view('clientgroups.create', compact('loyalgroups', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'client_id' => 'required',
            //'group_id' => 'required',
            'rate' => 'required',
        ]);

        $clientgroup = new ClientGroup();

        $client = Client::findOrFail($request->input('client_id'));

        //$loyalgroup = LoyalGroup::findOrFail($request->input('group_id'));
        $loyalgroup = LoyalGroup::where('rate', $request->input('rate'))->first();

        $client->discount = $loyalgroup->rate;

        $clientgroup->group_id = $loyalgroup->id;
        $clientgroup->title = $loyalgroup->title;
        $clientgroup->rate = $loyalgroup->rate;
        $clientgroup->description = $loyalgroup->description;
        $clientgroup->client_id = $request->input('client_id');
        $clientgroup->client_name = $client->name.' '.$client->firstname;
        $clientgroup->client_email = $client->email;
        $clientgroup->client_address = $client->address;
        $clientgroup->client_phone = $client->phone_number;

        $clientgroup->save();

        $client->save();

        return redirect()->route('clientgroups.index')
            ->with('success',
             "Le Groupe de fidélisation $clientgroup->title a été assigné au Client $client->name $client->firstname avec succès");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientgroup = ClientGroup::findOrFail($id);

        return view('clientgroups.show', compact('clientgroup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientgroup = ClientGroup::findOrFail($id);

        $loyalgroups = LoyalGroup::all()->pluck('title', 'rate','id');

        $clients = Client::all()->pluck('full_name','id');

        return view('clientgroups.edit', compact('clientgroup', 'loyalgroups', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clientgroup = ClientGroup::findOrFail($id);

        $this->validate($request, [
            'client_id' => 'required',
            //'group_id' => 'required',
            'rate' => 'required',
        ]);

        $client = Client::findOrFail($request->input('client_id'));

        //$loyalgroup = LoyalGroup::findOrFail($request->input('group_id'));
        $loyalgroup = LoyalGroup::where('rate', $request->input('rate'))->first();

        $client->discount = $loyalgroup->rate;

        $clientgroup->group_id = $loyalgroup->id;
        $clientgroup->title = $loyalgroup->title;
        $clientgroup->rate = $loyalgroup->rate;
        $clientgroup->description = $loyalgroup->description;
        $clientgroup->client_id = $request->input('client_id');
        $clientgroup->client_name = $client->name.' '.$client->firstname;
        $clientgroup->client_email = $client->email;
        $clientgroup->client_address = $client->address;
        $clientgroup->client_phone = $client->phone_number;

        $clientgroup->save();

        $client->save();

        return redirect()->route('clientgroups.index')
            ->with('success',
             "Le Groupe de Fidélisation du Client $client->name $client->firstname a été mis à jour avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientgroup = ClientGroup::findOrFail($id);

        $client = Client::findOrFail($clientgroup->client_id);

        $client->discount = NULL;

        $client->save();

        $clientgroup->delete();

        return redirect()->route('clientgroups.index')
            ->with('success',
             " Le Client $client->name $client->firstname a été retiré du Groupe des clients fidèles!");
    }
}
