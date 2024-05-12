<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;
use Illuminate\Http\JsonResponse;


class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Autor::all();
    }
    
    public function requiredFields(): JsonResponse
    {
        // Obtener las reglas de validación del modelo Autor
        $rules = Autor::rules();
    
        // Convertir las reglas de validación en campos requeridos
        $requiredFields = [];
        foreach ($rules as $attribute => $rule) {
            if (strpos($rule, 'required') !== false) {
                $requiredFields[] = $attribute;
            }
        }
    
        // Devolver los campos requeridos como respuesta JSON
        return response()->json($requiredFields);
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
        $autor = new Autor;
        $autor->nombre = $request -> input('nombre');
        $autor->save();

        return response()->json($autor, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return autor::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id): JsonResponse
    {
        // Encuentra el autor que deseas actualizar
        $autor = Autor::findOrFail($id);
    
        // Actualiza los campos necesarios del autor
        $autor->nombre = $request->input('nombre'); // Actualiza el nombre
    
        // Guarda los cambios en la base de datos
        $autor->save();
    
        // Devuelve una respuesta adecuada
        return response()->json($autor, 200);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $autor = Autor::findOrFail($id);
        $autor->delete();
    }
}
