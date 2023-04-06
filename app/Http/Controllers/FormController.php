<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Multiplication;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function calculer()
    {
        return view('form.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produit = $request->input('nbre1') * $request->input('nbre2');
        $multiplication=new Multiplication();
        $multiplication->nombre1=$request->input('nbre1');
        $multiplication->nombre2=$request->input('nbre2');
        $multiplication->produit=$produit;
        $multiplication->save();
        return view('form.resultat')->with('resultat', $produit);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
