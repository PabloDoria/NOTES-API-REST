<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clasificacion;
use Illuminate\Http\JsonResponse;

class ClasificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Clasificacion::all();
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
        $clasificacion = new Clasificacion;
        $clasificacion->nombre = $request -> input('nombre');
        $clasificacion->save();

        return response()->json($clasificacion, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Clasificacion::findOrFail($id);
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
        // Encuentra el autor que deseas actualizar
        $clasificacion = Clasificacion::findOrFail($id);
    
        // Actualiza los campos necesarios del autor
        $clasificacion->nombre = $request->input('nombre'); // Actualiza el nombre
    
        // Guarda los cambios en la base de datos
        $clasificacion->save();
    
        // Devuelve una respuesta adecuada
        return response()->json($clasificacion, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $clasificacion = Clasificacion::findOrFail($id);
        $clasificacion->delete();
    }
}
