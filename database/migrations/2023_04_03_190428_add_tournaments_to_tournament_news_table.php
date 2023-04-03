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
        Schema::table('tournament_news', function (Blueprint $table) {
            $table->foreignId('tournament_id')->index()->after('title');
            $table->foreign('tournament_id')->references('id')->on('tournaments')->onUpdate('CASCADE')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tournament_news', function (Blueprint $table) {
            //
        });
    }
};
