<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('searches', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 10);
            $table->text('criterio');
            $table->float('valor', 3, 1);
            $table->string('relevancia', 200);
            $table->text('comentario')->nullable();
            //$table->foreignId('user_id')->references('id')->on('users')->comment('El usuario que inicio sesion');
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
        Schema::dropIfExists('searches');
    }
}
