<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumne;
use Illuminate\Http\Request;

class AlumnesController extends Controller
{
    /**
     * Display a listing of the resource.
     * Aquesta funcio carga tota la informacio que tenim a la base de dades i la envia a la view amb
     * tota la informacio junta.
     */
    public function index()
    {
        $alumnes = Alumne::all();
        return view('admin.alumnat')->with(['alumnes' => $alumnes]);
    }


    /**
     * Show the form for creating a new resource.
     * Envia a la vista per poder crear el alumne
     */
    public function create()
    {
        return view('admin.crearAlumne');
    }

    /**
     * Store a newly created resource in storage.
     * Espera un request(informacio enviada per un formulari post) i l'assigna a les variables
     * de una clase nova del model Alumne.
     */
    public function store(Request $request)
    {
        $alumne = new Alumne;
        $alumne->name = $request->input('name');
        $alumne->surname = $request->input('surname');
        $alumne->email = $request->input('email');
        $alumne->save();
        return view('admin.crearAlumne');
    }

    /**
     * Display the specified resource.
     * Ens envia a una vista on mostra la informacio del alumne especific a la isntancia clicada.
     * O sigui, que quan nosaltres truquem aquesta funcio, ens ve amb una instancia especifica del alumne.
     */
    public function show(Alumne $alumne)
    {
        return view('admin.mostrarAlumne')->with(['alumne' => $alumne]);
    }

    /**
     * Show the form for editing the specified resource.
     * Envia a la vista de la modificacio d'un alumne especific d'una instancia.
     */
    public function edit(Alumne $alumne)
    {
        return view('admin.modificaAlumne')->with(['alumne' => $alumne]);
    }

    /**
     * Update the specified resource in storage.
     * Actualitza la informacio de un alumne, espera el formulari post i una instancia d'alumne. Fa un
     * update(actualitzacio) i envia a la vista general amb tota la informacio cargada.
     */
    public function update(Request $request, Alumne $alumne)
    {
        $alumne->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
        ]);
        $alumnes = Alumne::all();
        return view('admin.alumnat')->with(['alumnes' => $alumnes]);
    }

    /**
     * Remove the specified resource from storage.
     * Agafa una instancia especifica d'alumne i el eliminar per id.
     */
    public function destroy(Alumne $alumne)
    {
        $alumne->delete();
        $alumnes = Alumne::all();
        return view('admin.alumnat')->with(['alumnes' => $alumnes]);
    }
}
