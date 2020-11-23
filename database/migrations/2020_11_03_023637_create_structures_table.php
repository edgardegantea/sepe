<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('structures', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',10);
            $table->string('criterio',200);
            $table->string('valor',100);
            $table->string('relevancia',200);
            $table->text('comentario')->nullable();
            $table->foreignId('user_id')->references('id')->on('users')->comment('El usuario que inicio sesion');
            //$table->foreignId('project_id')->references('id')->on('projects')->comment('Relacion con el proyecto seleccionado');
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
        Schema::dropIfExists('structures');
    }
}
