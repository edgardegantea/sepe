<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controls', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 10);
            $table->text('criterio');
            $table->float('valor', 3, 1);
            $table->string('relevancia', 200);
            $table->text('comentario')->nullable();
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
        Schema::dropIfExists('controls');
    }
}
