<?php

namespace Database\Seeders;

use App\Models\Duel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DuelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Duel::create([
            "playoff_id" => 1,
            "game_id" => 2 ,
            "team1_score" => 1,
            "team2_score" => 0,
            "team1_id" => 1,
            "team2_id" => 2,
            "tournament_id" => 1,
            "starting_date" => "2023-04-07 0:01:44",
            "status_id" => 1

        ]) ;
        Duel::create([
            "playoff_id" => 1,
            "game_id" => 2 ,
            "team1_score" => 5,
            "team2_score" => 2,
            "team1_id" => 3,
            "team2_id" => 4,
            "tournament_id" => 1,
            "starting_date" => "2023-04-07 0:03:44",
            "status_id" => 2

        ]) ;
        Duel::create([
            "playoff_id" => 2,
            "game_id" => 2 ,
            "team1_score" => 1,
            "team2_score" => 4,
            "team1_id" => 5,
            "team2_id" => 1,
            "tournament_id" => 1,
            "starting_date" => "2023-04-07 0:04:44",
            "status_id" => 3

        ]) ;
        Duel::create([
            "playoff_id" => 2,
            "game_id" => 2 ,
            "team1_score" => 2,
            "team2_score" => 0,
            "team1_id" => 3,
            "team2_id" => 2,
            "tournament_id" => 1,
            "starting_date" => "2023-04-07 0:05:44",
            "status_id" => 3

        ]) ;
        Duel::create([
            "playoff_id" => 3,
            "game_id" => 2 ,
            "team1_score" => 1,
            "team2_score" => 4,
            "team1_id" => 5,
            "team2_id" => 6,
            "tournament_id" => 1,
            "starting_date" => "2023-04-07 0:06:44",
            "status_id" => 3

        ]) ;
        Duel::factory(40)->create() ;
    }
}
