<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_tournament', function (Blueprint $table) {
            $table->id();

            $table->foreignId('tournament_id')->index()->default('1') ;
            $table->foreign('tournament_id')->references('id')->on('tournaments')->onUpdate('CASCADE')->onDelete('RESTRICT');

            $table->foreignId('team_id')->index()->default('1') ;
            $table->foreign('team_id')->references('id')->on('teams')->onUpdate('CASCADE')->onDelete('RESTRICT');

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
        Schema::dropIfExists('team_tournament');
    }
};
