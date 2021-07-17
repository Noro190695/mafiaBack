<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room', function (Blueprint $table) {
            $table->id('id');
            $table->string('name', 255);
            $table->string('password', 255);
            $table->integer('mafia_count');
            $table->integer('cityzen_count');
            $table->boolean('sherif');
            $table->boolean('don');
            $table->boolean('manyak');
            $table->boolean('doctor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room');
    }
}
