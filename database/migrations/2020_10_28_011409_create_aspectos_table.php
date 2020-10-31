<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAspectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspectos', function (Blueprint $table) {
            $table->id();
            $table->string('valor',100);
            $table->string('relevancia',200);
            $table->text('comentario')->nullable();
            $table->string('valor_interno',200);
            $table->string('valor_interno_relevancia',200);
            $table->string('factor_correcion',200);
            $table->string('valor_parcial',200);
            $table->string('valor_parcial2',200);
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
        Schema::dropIfExists('aspectos');
    }
}
