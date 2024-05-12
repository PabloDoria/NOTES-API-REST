<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    public function autor()
    {
        return $this->belongsTo(Autor::class, 'Autor_id');
    }

    public function clasificacion()
    {
        return $this->belongsTo(Clasificacion::class, 'Clasificacion_id');
    }

}
