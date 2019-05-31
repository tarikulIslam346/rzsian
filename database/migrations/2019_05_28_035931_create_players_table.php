<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('player_id');
            $table->string('player_name');
            $table->integer('age');
            $table->date('dob');
            $table->string('position');
            $table->integer('team_id');
            $table->integer('total_run');
            $table->integer('total_wicket');
            $table->integer('total_match');
            $table->string('player_image');
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
        Schema::dropIfExists('players');
    }
}
