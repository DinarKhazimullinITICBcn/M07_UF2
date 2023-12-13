<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\professorat;
use Illuminate\Http\Request;

class ProfessoratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professorats = professorat::all();

        return view('professorat')->with(['professors' => $professorats]);  
    
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
        $professorat = new professorat;
        $professorat->name = $request->input('name');
        $professorat->surname = $request->input('surname');
        $professorat->rol = $request->input('rol');
        $professorat->email = $request->input('email');

        return redirect()->route('professorats.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Professorat $professorat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professorat $professorat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Professorat $professorat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professorat $professorat)
    {
        //
    }
}
