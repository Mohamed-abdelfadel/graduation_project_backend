<?php

namespace Database\Seeders;

use App\Models\Duel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DuelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $first_date = "2023-05-24";
        $middle_date = "2023-05-25";
        $last_date = "2023-05-26";
        Duel::create([
            "playoff_id" => 1,
            "game_id" => 1 ,
            "team1_score" => 2,
            "team2_score" => 0,
            "team1_id" => 1,
            "team2_id" => 10,
            "tournament_id" => 1,
            "starting_date" => "{$first_date} 0:03:44",
            "status_id" => 1
        ]) ;

        Duel::create([
            "playoff_id" => 1,
            "game_id" => 1 ,
            "team1_score" => 2,
            "team2_score" => 1,
            "team1_id" => 7,
            "team2_id" => 5,
            "tournament_id" => 1,
            "starting_date" => "{$first_date} 0:04:44",
            "status_id" => 1
        ]) ;

        Duel::create([
            "playoff_id" => 1,
            "game_id" => 1 ,
            "team1_score" => 1,
            "team2_score" => 2,
            "team1_id" => 3,
            "team2_id" => 4,
            "tournament_id" => 1,
            "starting_date" => "{$first_date} 0:05:44",
            "status_id" => 1
        ]) ;

        Duel::create([
            "playoff_id" => 1,
            "game_id" => 1 ,
            "team1_score" => 1,
            "team2_score" => 2,
            "team1_id" => 2,
            "team2_id" => 8,
            "tournament_id" => 1,
            "starting_date" => "{$first_date} 0:05:44",
            "status_id" => 1
        ]) ;

        Duel::create([
            "playoff_id" => 2,
            "game_id" => 1 ,
            "team1_score" => 0,
            "team2_score" => 2,
            "team1_id" => 1,
            "team2_id" => 7,
            "tournament_id" => 1,
            "starting_date" => "{$middle_date} 0:05:44",
            "status_id" => 2
        ]) ;
        Duel::create([
            "playoff_id" => 2,
            "game_id" => 1 ,
            "team1_score" => 1,
            "team2_score" => 2,
            "team1_id" => 4,
            "team2_id" => 8,
            "tournament_id" => 1,
            "starting_date" => "{$middle_date} 0:05:44",
            "status_id" => 2
        ]) ;

        Duel::create([
            "playoff_id" => 3,
            "game_id" => 1 ,
            "team1_score" => 2,
            "team2_score" => 1,
            "team1_id" => 7,
            "team2_id" => 8,
            "tournament_id" => 1,
            "starting_date" => "{$last_date} 0:05:44",
            "status_id" => 3
        ]) ;
        Duel::create([
            "playoff_id" => 1,
            "game_id" => 1,
            "team1_score" => 2,
            "team2_score" => 1,
            "team1_id" => 10,
            "team2_id" => 5,
            "tournament_id" => 1,
            "starting_date" => "{$first_date} 0:03:44",
            "status_id" => 2
        ]) ;
        Duel::create([
            "playoff_id" => 1,
            "game_id" => 1 ,
            "team1_score" => 2,
            "team2_score" => 0,
            "team1_id" => 3,
            "team2_id" => 2,
            "tournament_id" => 1,
            "starting_date" => "{$first_date} 0:03:44",
            "status_id" => 2
        ]) ;
        Duel::create([
            "playoff_id" => 2,
            "game_id" => 1 ,
            "team1_score" => 2,
            "team2_score" => 3 ,
            "team1_id" => 10,
            "team2_id" => 3,
            "tournament_id" => 1,
            "starting_date" => "{$middle_date} 0:03:44",
            "status_id" => 2
        ]) ;
        Duel::create([
            "playoff_id" => 2,
            "game_id" => 2 ,
            "team1_score" => 2,
            "team2_score" => 0,
            "team1_id" => 3,
            "team2_id" => 2,
            "tournament_id" => 1,
            "starting_date" => "2023-05-19 0:05:44",
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
            "starting_date" => "2023-05-19 0:06:44",
            "status_id" => 3

        ]) ;
//        Duel::factory(40)->create() ;
    }
}
