<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->integer('id_grupo')->autoIncrement();
            //$table->primary('id_grupo');
            $table->string('semestre');
            $table->string('grupo');
            $table->string('turno');
        });
    }

     /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}
