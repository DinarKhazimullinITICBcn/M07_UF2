<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Centre;
use Illuminate\Http\Request;

class CentresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centres = Centre::all();
        return view('Admin.centres', compact('centres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.registreCentres');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $centre = new Centre;
        //Assignacio de dades amb noms de variabnles
        $centre->name = $request->input('name');
        $centre->address = $request->input('adress');
        $centre->cp = $request->input('cp');
        $centre->city = $request->input('city');

        $centre->save();

        $centres = Centre::all();
        return view('Admin.centres', compact('centres'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Centre $centre)
    {
        return view('Admin.centres', compact('centres'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Centre $centre)
    {
        // Asignación de datos con nombres de variables
        return view('Admin.modificaCentres', compact('centre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Centre $centre)
    {
        $centre->update([
            $centre->name = $request->input('name'),
            $centre->address = $request->input('adress'),
            $centre->cp = $request->input('cp'),
            $centre->city = $request->input('city')
        ]);

        $centres = Centre::all();
        return view('Admin.centres', compact('centres'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Centre $centre)
    {
        $centre->delete();
        $centres = Centre::all();
        return view('Admin.centres', compact('centres'));
    }

}
