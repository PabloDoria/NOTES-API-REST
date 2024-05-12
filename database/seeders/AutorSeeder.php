<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Autor;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define los nombres de los autores
        $nombres = [
            'Autor 1',
            'Autor 2',
            'Autor 3',
            'Autor 4',
            'Autor 5',
            'Autor 6',
            'Autor 7',
            'Autor 8',
            'Autor 9',
            'Autor 10',
        ];

        // Itera sobre los nombres y crea un registro para cada uno
        foreach ($nombres as $nombre) {
            Autor::create([
                'nombre' => $nombre,
            ]);
        }
    }
}
