<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Materia $materia)
    {
        return view('materias.show', compact('materia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materia $materia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materia $materia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materia $materia)
    {
        //
    }

    public function inscribirAlumnos(Materia $materia)
    {
        $alumnos = Alumno::all();
        return view('materias.inscribir', compact('materia', 'alumnos'));
    }

    public function storeAlumnos(Request $request, Materia $materia)
    {
        $materia->alumnos()->sync($request->alumno_id);
        return redirect()->route('materia.show', $materia);
    }

    public function bajaAlumno(Request $request, Materia $materia)
    {
        $materia->alumnos()->detach($request->alumno_id);
        return redirect()->route('materia.show', $materia);
    }
}
