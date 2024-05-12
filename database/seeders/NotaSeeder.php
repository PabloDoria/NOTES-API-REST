<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nota;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Obtén algunos autores y clasificaciones existentes
        $autores = \App\Models\Autor::pluck('id');
        $clasificaciones = \App\Models\Clasificacion::pluck('id');

        // Crea 10 registros de notas
        for ($i = 0; $i < 10; $i++) {
            Nota::create([
                'titulo' => 'Nota ' . ($i + 1),
                'Autor_id' => $autores->random(),
                'contenido' => 'Contenido de la nota ' . ($i + 1),
                'Clasificacion_id' => $clasificaciones->random(),
            ]);
        }
    }
}
