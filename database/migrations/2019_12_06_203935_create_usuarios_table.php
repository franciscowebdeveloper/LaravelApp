<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        // creamos tabla
        /*
        //Migración con Schema
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user', 255);
            $table->string('email', 255);
            $table->string('password', 255);
            $table->integer('edad');
            // nos permite crear los campos la ultima vez que modifique registro y la primera vez que se creó
            $table->timestamps();
        });
        */

        // Migracion con SQL
        // DB::statement("
        //     CREATE TABLE usuarios(
        //         id int(255) auto_increment not null,
        //         nombre varchar(255),
        //         email varchar(255),
        //         password varchar(255),
        //         PRIMARY KEY(id)
        //     );"
        // );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('usuarios', function (Blueprint $table) {
        //     //
        // });
        Schema::drop('usuarios');
    }
}
