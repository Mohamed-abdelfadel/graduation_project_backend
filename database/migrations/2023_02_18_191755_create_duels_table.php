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
        Schema::create('duels', function (Blueprint $table) {
            $table->id();
            $table->integer('team1_score')->nullable() ;
            $table->integer('team2_score')->nullable() ;
            $table->string("platform")->nullable();
            $table->string("video_link")->nullable();
            $table->dateTime('starting_date') ;
            $table->timestamps();
            $table->softDeletes() ;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('duels');
    }
};
