<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->string('name', 250)->unique();
            $table->text('description');
            $table->integer('semester');
            $table->string('logo');
            $table->string('status');
            $table->string('percentage')->nullable();
            $table->string('usability')->nullable();

            $table->unsignedBigInteger('subject_id')->nullable();
            $table->unsignedBigInteger('team_id');

            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('set null');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
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
        Schema::dropIfExists('projects');
    }
}
