<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->string('valor',50);
            $table->string('relevancia',200);
            $table->text('comentario')->nullable();
            $table->string('evaluacion_heuristica',20);
            $table->foreignId('user_id')->references('id')->on('users')->comment('El usuario loogeado actualmente');
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
        Schema::dropIfExists('evaluations');
    }
}
