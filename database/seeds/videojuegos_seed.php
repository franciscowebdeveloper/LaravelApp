<?php

use Illuminate\Database\Seeder;

class videojuegos_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Queremos insertar 20 registros
        for($i = 0; $i <= 20; $i++){
            // tabla videojuegos
            DB::table('videojuego')->insert(array(
                'nombre' => 'Gran turismo 2 '.$i,
                'descripcion' => 'Descripción del juego '.$i,
                'precio' => $i,
                'fecha' => date('Y-m-d')

            ));
        }
        // Al final del método ejecutamos un mensaje en la consola con:
        $this->command->info('La tabla videojuegos ha sido rellenada');
    }
}
