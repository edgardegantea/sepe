<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRotuladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rotulados', function (Blueprint $table) {
            $table->id();

            $table->string('codigo', 10);
            $table->text('criterio');
            $table->float('valor', 3, 1);
            $table->string('relevancia', 200)->nullable();
            $table->text('comentario')->nullable();

            $table->unsignedBigInteger('project_id');

            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');

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
        Schema::dropIfExists('rotulados');
    }
}
