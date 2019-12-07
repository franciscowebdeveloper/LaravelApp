<?php

use Illuminate\Database\Seeder;

class FrutasSeed extends Seeder
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
            // tabla frutas
            DB::table('frutas')->insert(array(
                'nombre' => 'Naranja '.$i,
                'descripcion' => 'Descripción de la fruta '.$i,

            ));
        }
        // Al final del método ejecutamos un mensaje en la consola con:
        $this->command->info('La tabla frutas ha sido rellenada');
    }
}
