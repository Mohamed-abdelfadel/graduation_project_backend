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
        Schema::create('playoffs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
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
        Schema::dropIfExists('playoffs');
    }
};




//
//$table->foreignId('match')->index()->nullable() ;
//$table->foreign('match')->references('id')->on('duels')->onUpdate('CASCADE')->onDelete('RESTRICT');
//
//$table->foreignId('winner')->index()->nullable() ;
//$table->foreign('winner')->references('id')->on('teams')->onUpdate('CASCADE')->onDelete('RESTRICT');
