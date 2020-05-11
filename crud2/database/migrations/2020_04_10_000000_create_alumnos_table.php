<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->integer('id_alumno')->autoIncrement();
            //$table->primary('id_alumno');
            $table->char('nombre', 50);
            $table->char('apellido_p',50);
            $table->char('apellido_m',50);
            $table->char('correo',50)->unique();
            $table->smallInteger('edad');
            $table->char('telefono',15);
            $table->integer('grupo');
            $table->foreign('grupo')->references('id_grupo')->on('grupos');
        });
    }

     /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
