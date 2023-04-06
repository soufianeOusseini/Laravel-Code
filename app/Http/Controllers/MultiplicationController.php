<?php

namespace App\Http\Controllers;

use App\Models\Multiplication;
use App\Http\Requests\StoreMultiplicationRequest;
use App\Http\Requests\UpdateMultiplicationRequest;


class MultiplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $multiplications =  Multiplication::get();
        return view('multiplication.index')->with('multiplications',$multiplications);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('multiplication.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMultiplicationRequest $request)
    {
        
        $produit = $request->input('nbre1') * $request->input('nbre2');
        $multiplication=new Multiplication();
        $multiplication->nombre1=$request->input('nbre1');
        $multiplication->nombre2=$request->input('nbre2');
        $multiplication->produit=$produit;
        $multiplication->save();
        $multiplications =  Multiplication::get();
        return view('multiplication.index')->with('multiplications',$multiplications);
    }

    /**
     * Display the specified resource.
     */
    public function show(Multiplication $multiplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Multiplication $multiplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMultiplicationRequest $request, Multiplication $multiplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Multiplication $multiplication)
    {
        //
    }
}
