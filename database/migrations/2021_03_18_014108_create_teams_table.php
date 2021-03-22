<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();

            $table->string('name');

            $table->unsignedBigInteger('member_1')->nullable();
            $table->unsignedBigInteger('member_2')->nullable();
            $table->unsignedBigInteger('member_3')->nullable();
            $table->unsignedBigInteger('member_4')->nullable();

            $table->foreign('member_1')
                ->references('id')
                ->on('users')
                ->onDelete('set null');

            $table->foreign('member_2')
                ->references('id')
                ->on('users')
                ->onDelete('set null');

            $table->foreign('member_3')
                ->references('id')
                ->on('users')
                ->onDelete('set null');

            $table->foreign('member_4')
                ->references('id')
                ->on('users')
                ->onDelete('set null');

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
        Schema::dropIfExists('teams');
    }
}
