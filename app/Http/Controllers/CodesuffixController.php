<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CodeSuffix;

class CodesuffixController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $codesuffixes = CodeSuffix::all(); //Get all codesuffixes

        return view('codesuffixes.index')->with('codesuffixes', $codesuffixes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('codesuffixes.create');
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
            'title' => 'required|max:120',
        ]);

        $codesuffixe = new CodeSuffix();
        $codesuffixe->title = $request->input('title');

        $codesuffixe->save();

        //Redirect to the codesuffixes.index view and display message
        return redirect()->route('codesuffixes.index')
            ->with('success',
             'Suffixe ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $codesuffixe = CodeSuffix::findOrFail($id); //Find codesuffixe of id = $id

        return view('codesuffixes.show', compact('codesuffixe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $codesuffixe = CodeSuffix::findOrFail($id); //Find codesuffixe of id = $id

        return view('codesuffixes.edit', compact('codesuffixe'));
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
        $codesuffixe = CodeSuffix::findOrFail($id); //Find codesuffixe of id = $id

        $this->validate($request, [
            'title' => 'required|max:120',
        ]);

        $codesuffixe->title = $request->input('title');

        $codesuffixe->save();

        //Redirect to the codesuffixes.index view and display message
        return redirect()->route('codesuffixes.index')
            ->with('success',
             'Suffixe édité avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $codesuffixe = CodeSuffix::findOrFail($id);

        $codesuffixe->delete();

        return redirect()->route('codesuffixes.index')
            ->with('success',
             'Suffixe supprimé avec succès');
    }
}
