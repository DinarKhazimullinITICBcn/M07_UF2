<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alumne;
use Illuminate\Http\Request;

class AlumnesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnes = Alumne::all();
        return view('admin.alumnat')->with(['alumnes' => $alumnes]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.crearAlumne');
    }

    /**
     * Store a newly created resource in storage.
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
     */
    public function show(Alumne $alumne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumne $alumne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumne $alumne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumne $alumne)
    {
        //
    }
}
