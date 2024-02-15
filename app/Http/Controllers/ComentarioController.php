<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comentarios = Comentario::all();
        return view('comentario.indexComentario', compact('comentarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comentario.createComentario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'correo' => 'required|email',
            'comentario' => 'required|string|min:10',
            'ciudad' => 'required',
        ]);

        $comentario = new Comentario();
        $comentario->nombre = $request->nombre;
        $comentario->correo = $request->correo;
        $comentario->comentario = $request->comentario;
        $comentario->ciudad = $request->ciudad;
        $comentario->save();

        // Redireccionar
        // return redirect('/contacto');
        return redirect()->route('comentario.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comentario $comentario)
    {
        return view('comentario.showComentario', compact('comentario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comentario $comentario)
    {
        return view('comentario.editComentario', compact('comentario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comentario $comentario)
    {
        // Validar
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'correo' => 'required|email',
            'comentario' => 'required|string|min:10',
            'ciudad' => 'required',
        ]);

        $comentario->nombre = $request->nombre;
        $comentario->correo = $request->correo;
        $comentario->comentario = $request->comentario;
        $comentario->ciudad = $request->ciudad;
        $comentario->save();

        return redirect()->route('comentario.show', $comentario);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comentario $comentario)
    {
        $comentario->delete();
        return redirect()->route('comentario.index');
    }
}
