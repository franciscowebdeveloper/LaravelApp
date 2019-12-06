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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user', 255);
            $table->string('email', 255);
            $table->string('password', 255);
            $table->integer('edad');
            // nos permite crear los campos la ultima vez que modifique registro y la primera vez que se creó
            $table->timestamps();
        });
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
