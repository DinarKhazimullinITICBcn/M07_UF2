<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Professorat;
use Illuminate\Http\Request;

class ProfessoratController extends Controller
{
    /**
     * Mostra una llista dels recursos.
     */
    public function index()
    {
        // Recupera tots els professors de la base de dades
        $professorats = Professorat::all();

        // Mostra la vista 'professorat' amb els professors recuperats
        return view('professorat')->with(['professors' => $professorats]);
    }

    /**
     * Mostra el formulari per crear un nou recurs.
     */
    public function create()
    {
        // Mostra el formulari per crear un nou professorat
        return view('CrearRegistre');
    }

    /**
     * Emmagatzema un recurs creat recentment.
     */
    public function store(Request $request)
    {
        // Crea una nova instància de professorat
        $professorat = new Professorat;

        // Estableix els atributs basant-se en les dades d'entrada del formulari
        $professorat->name = $request->input('name');
        $professorat->surname = $request->input('surname');
        $professorat->rol = 'professor';
        $professorat->email = $request->input('email');

        // Desa la nova instància de professorat a la base de dades
        $professorat->save();

        // Mostra la vista 'crearRegistre'
        return view('crearRegistre');
    }

    /**
     * Mostra el recurs especificat.
     */
    public function show(Professorat $professorat)
    {
        // Mostra la vista 'mostraProfessorat' amb el professorat especificat
        return view('mostraProfessorat')->with(['professor' => $professorat]);
    }

    /**
     * Mostra el formulari per editar el recurs especificat.
     */
    public function edit(Professorat $professorat)
    {
        // Mostra la vista 'modificaProfessorat' amb el professorat especificat
        return view('modificaProfessorat')->with(['professor' => $professorat]);
    }

    /**
     * Actualitza el recurs especificat a l'emmagatzematge.
     */
    public function update(Request $request, Professorat $professorat)
    {
        // Valida les dades d'entrada del formulari
        $validatedData = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email',
        ]);

        // Actualitza el registre de professorat amb les dades validades
        $professorat->update($validatedData);

        // Recupera tots els professors de la base de dades
        $professorats = Professorat::all();

        // Mostra la vista 'professorat' amb els professors recuperats
        return view('professorat')->with(['professors' => $professorats]);
    }

    /**
     * Elimina el recurs especificat de l'emmagatzematge.
     */
    public function destroy(Professorat $professorat)
    {
        // Elimina el professorat especificat de la base de dades
        $professorat->delete();

        // Recupera tots els professors de la base de dades
        $professorats = Professorat::all();

        // Mostra la vista 'professorat' amb els professors recuperats
        return view('professorat')->with(['professors' => $professorats]);
    }
}
