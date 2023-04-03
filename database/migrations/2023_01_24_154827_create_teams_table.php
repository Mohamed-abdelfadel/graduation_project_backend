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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->default('https://www.precisionpass.co.uk/wp-content/uploads/2018/03/default-team-logo.png');
            $table->string('name');
            $table->integer('matches_played')->default(0);
            $table->integer('wins')->default(0);
            $table->integer('loses')->default(0);
            $table->longText('description')->nullable();
            $table->longText('history')->nullable();
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
};
