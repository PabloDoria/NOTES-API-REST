<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;
use Illuminate\Http\JsonResponse;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Nota::all();
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
        $nota = new Nota;
        $nota->Autor_id = $request -> input('autor');
        $nota->titulo = $request -> input('titulo');
        $nota->contenido = $request -> input('contenido');
        $nota->Clasificacion_id = $request -> input('clasificacion');
        $nota->save();

        return response()->json($nota, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Busca la nota por su ID junto con las relaciones 'autor' y 'clasificacion'
        $nota = Nota::with(['autor', 'clasificacion'])->findOrFail($id);

        // Oculta las columnas 'Autor_id' y 'Clasificacion_id' en la salida JSON
        $nota->makeHidden(['Autor_id', 'Clasificacion_id']);
    
        // Retorna la nota, incluyendo el nombre del autor
        return $nota;
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
    public function update(Request $request, string $id): JsonResponse
    {
        // Encuentra la nota que deseas actualizar
        $nota = Nota::findOrFail($id);
        
        // Actualiza solo los campos proporcionados en la solicitud
        if ($request->filled('titulo')) {
            $nota->titulo = $request->input('titulo');
        }
    
        if ($request->filled('Autor_id')) {
            $nota->Autor_id = $request->input('Autor_id');
        }
    
        if ($request->filled('contenido')) {
            $nota->contenido = $request->input('contenido');
        }
    
        if ($request->filled('Clasificacion_id')) {
            $nota->Clasificacion_id = $request->input('Clasificacion_id');
        }
    
        // Guarda los cambios en la base de datos
        $nota->save();
        
        // Devuelve una respuesta adecuada
        return response()->json($nota, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $nota = Nota::findOrFail($id);
        $nota->delete();
    }
}
