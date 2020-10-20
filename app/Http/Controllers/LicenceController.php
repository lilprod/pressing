<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Licence;
use Carbon\Carbon;

class LicenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licences = Licence::all(); //Get all licences

        return view('licences.index')->with('licences', $licences);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('licences.create');
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
            'code' => 'required|max:40',
        ]);

        $licence  = Licence::find(1);

        if($licence->code == $request->input('code')){

            $licence->code = '';
            $licence->is_activated = 1;
            $licence->activated_at = Carbon::now();
            $licence->expire_at = Carbon::parse($licence->activated_at)->addMonths(6);
            $licence->save();

            return redirect()->route('login')->with('success', 'Votre application est de nouveau actif!');

        }else{

            return redirect()->back()->with('error', 'Votre Code d\'activation est incorrect!');

        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
