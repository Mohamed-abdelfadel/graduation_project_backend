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
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('logo' )->default('https://static.vecteezy.com/system/resources/thumbnails/007/681/088/small/immortal-esports-logo-template-for-gaming-team-or-tournament-vector.jpg');
            $table->string('name') ;
            $table->string('description')->nullable() ;
            $table->double('total_prize')->default(0) ;
            $table->string('location')->nullable() ;
            $table->timestamp('starting_date')->nullable();
            $table->double('first_team_prize')->default(0) ;
            $table->double('second_team_prize')->default(0) ;
            $table->double('third_team_prize')->default(0) ;
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
        Schema::dropIfExists('tournaments');
    }
};
