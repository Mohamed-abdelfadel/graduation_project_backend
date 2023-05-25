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
        //tournament 1 matches
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
            "team2_id" => 6,
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
            "game_id" => 1,
            "team1_score" => 2,
            "team2_score" => 1,
            "team1_id" => 10,
            "team2_id" => 5,
            "tournament_id" => 1,
            "starting_date" => "{$first_date} 0:03:44",
            "status_id" => 1
        ]) ;
        Duel::create([
            "playoff_id" => 2,
            "game_id" => 1 ,
            "team1_score" => 2,
            "team2_score" => 0,
            "team1_id" => 3,
            "team2_id" => 2,
            "tournament_id" => 1,
            "starting_date" => "{$first_date} 0:03:44",
            "status_id" => 1
        ]) ;
        Duel::create([
            "playoff_id" => 3,
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
            "playoff_id" => 3,
            "game_id" => 1 ,
            "team1_score" => 1,
            "team2_score" => 2,
            "team1_id" => 5,
            "team2_id" => 8,
            "tournament_id" => 1,
            "starting_date" => "{$middle_date} 0:05:44",
            "status_id" => 1
        ]) ;
        Duel::create([
            "playoff_id" => 4,
            "game_id" => 1 ,
            "team1_score" => 1,
            "team2_score" => 2,
            "team1_id" => 6,
            "team2_id" => 10,
            "tournament_id" => 1,
            "starting_date" => "{$middle_date} 0:03:44",
            "status_id" => 2
        ]) ;
        Duel::create([
            "playoff_id" => 4,
            "game_id" => 1 ,
            "team1_score" => 0,
            "team2_score" => 2,
            "team1_id" => 1,
            "team2_id" => 3,
            "tournament_id" => 1,
            "starting_date" => "{$middle_date} 0:03:44",
            "status_id" => 2
        ]) ;
        Duel::create([
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/CHDPfolL4C8",
            "playoff_id" => 5,
            "game_id" => 1 ,
            "team1_score" => null,
            "team2_score" => null,
            "team1_id" => 7,
            "team2_id" => 8,
            "tournament_id" => 1,
            "starting_date" => "{$last_date} 0:05:44",
            "status_id" => 3
        ]) ;
        Duel::create([
            "playoff_id" => 6,
            "game_id" => 2 ,
            "team1_score" => null,
            "team2_score" => null,
            "team1_id" => 8,
            "team2_id" => 10,
            "tournament_id" => 1,
            "starting_date" => "{$last_date} 0:06:44",
            "status_id" => 3
        ]) ;
        Duel::create([
            "playoff_id" => 7,
            "game_id" => 2 ,
            "team1_score" => null,
            "team2_score" => null,
            "team1_id" => 7,
            "team2_id" => 8,
            "tournament_id" => 1,
            "starting_date" => "{$last_date} 0:06:44",
            "status_id" => 3
        ]) ;



        Duel::create([
            "playoff_id" => 1 ,
            "game_id" =>  2,
            "team1_score" => 1,
            "team2_score" => 2,
            "team1_id" => 18,
            "team2_id" => 16,
            "tournament_id" => 2,
            "starting_date" => "{$first_date} 0:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 1 ,
            "game_id" =>  2,
            "team1_score" => 1,
            "team2_score" => 2,
            "team1_id" => 21,
            "team2_id" => 15,
            "tournament_id" => 2,
            "starting_date" => "{$first_date} 0:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 3 ,
            "game_id" =>  2,
            "team1_score" => null,
            "team2_score" => null,
            "team1_id" => 19,
            "team2_id" => 16,
            "tournament_id" => 2,
            "starting_date" => "{$middle_date} 0:06:44",
            "status_id" =>3
        ]) ;
        Duel::create([
            "playoff_id" => 3 ,
            "game_id" =>  2,
            "team1_score" => null,
            "team2_score" => null,
            "team1_id" => 14,
            "team2_id" => 15,
            "tournament_id" => 2,
            "starting_date" => "{$middle_date} 0:06:44",
            "status_id" =>3
        ]) ;




        Duel::create([
            "playoff_id" => 1 ,
            "game_id" =>  1,
            "team1_score" => 3,
            "team2_score" => 1,
            "team1_id" => 26,
            "team2_id" => 25,
            "tournament_id" => 3,
            "starting_date" => "{$first_date} 0:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 1 ,
            "game_id" =>  1,
            "team1_score" => 0,
            "team2_score" => 3,
            "team1_id" => 30,
            "team2_id" => 27,
            "tournament_id" => 3,
            "starting_date" => "{$first_date} 0:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 1 ,
            "game_id" =>  1,
            "team1_score" => 0,
            "team2_score" => 3,
            "team1_id" => 28,
            "team2_id" => 23,
            "tournament_id" => 3,
            "starting_date" => "{$first_date} 0:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 1 ,
            "game_id" =>  1,
            "team1_score" => 3,
            "team2_score" => 0,
            "team1_id" => 29,
            "team2_id" => 31,
            "tournament_id" => 3,
            "starting_date" => "{$first_date} 0:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 2 ,
            "game_id" =>  1,
            "team1_score" => 3,
            "team2_score" => 0,
            "team1_id" => 25,
            "team2_id" => 30,
            "tournament_id" => 3,
            "starting_date" => "{$first_date} 0:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 2 ,
            "game_id" =>  1,
            "team1_score" => 3,
            "team2_score" => 1,
            "team1_id" => 28,
            "team2_id" => 31,
            "tournament_id" => 3,
            "starting_date" => "{$first_date} 0:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 3 ,
            "game_id" =>  1,
            "team1_score" => 2,
            "team2_score" => 3,
            "team1_id" => 26,
            "team2_id" => 27,
            "tournament_id" => 3,
            "starting_date" => "{$middle_date} 0:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 3 ,
            "game_id" =>  1,
            "team1_score" => 0,
            "team2_score" => 3,
            "team1_id" => 23,
            "team2_id" => 29,
            "tournament_id" => 3,
            "starting_date" => "{$middle_date} 0:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 4 ,
            "game_id" =>  1,
            "team1_score" => 3,
            "team2_score" => 1,
            "team1_id" => 23,
            "team2_id" => 25,
            "tournament_id" => 3,
            "starting_date" => "{$middle_date} 0:06:44",
            "status_id" =>2
        ]) ;
        Duel::create([
            "playoff_id" => 4 ,
            "game_id" =>  1,
            "team1_score" => 3,
            "team2_score" => 0,
            "team1_id" => 26,
            "team2_id" => 28,
            "tournament_id" => 3,
            "starting_date" => "{$middle_date} 0:06:44",
            "status_id" =>2
        ]) ;
        Duel::create([
            "playoff_id" => 5 ,
            "game_id" =>  1,
            "team1_score" => null,
            "team2_score" => null,
            "team1_id" => 27,
            "team2_id" => 29,
            "tournament_id" => 3,
            "starting_date" => "{$middle_date} 0:06:44",
            "status_id" =>3
        ]) ;
        Duel::create([
            "playoff_id" => 6 ,
            "game_id" =>  1,
            "team1_score" => null,
            "team2_score" => null,
            "team1_id" => 27,
            "team2_id" => 23,
            "tournament_id" => 3,
            "starting_date" => "{$middle_date} 0:06:44",
            "status_id" =>3
        ]) ;
        Duel::create([
            "playoff_id" => 7 ,
            "game_id" =>  1,
            "team1_score" => null,
            "team2_score" => null,
            "team1_id" => 29,
            "team2_id" => 23,
            "tournament_id" => 3,
            "starting_date" => "{$last_date} 0:06:44",
            "status_id" =>3
        ]) ;
//        Duel::create([
//            "playoff_id" => ,
//            "game_id" =>  ,
//            "team1_score" => ,
//            "team2_score" => ,
//            "team1_id" => ,
//            "team2_id" => ,
//            "tournament_id" => ,
//            "starting_date" => "{} 0:06:44",
//            "status_id" =>
//        ]) ;


    }
}
