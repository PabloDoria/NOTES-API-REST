<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $table = 'autores';

    public static function rules(): array
    {
        return [
            'nombre' => 'required|string|max:255',
            // Agrega aquí las reglas de validación para otros campos si es necesario
        ];
    }
}
