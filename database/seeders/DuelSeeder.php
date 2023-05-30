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
        $first_date = "2023-05-30";
        $middle_date = "2023-05-31";
        $last_date = "2023-06-01";
        //tournament 1 matches
        Duel::create([
            "playoff_id" => 1,
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/w_g9XxYSN40",
            "game_id" => 1 ,
            "team1_score" => 2,
            "team2_score" => 0,
            "team1_id" => 1,
            "team2_id" => 10,
            "tournament_id" => 1,
            "starting_date" => "{$first_date} 00:03:44",
            "status_id" => 1
        ]) ;
        Duel::create([
            "playoff_id" => 1,
            "platform"=>"",
            "video_link"=>"",
            "game_id" => 1 ,
            "team1_score" => 2,
            "team2_score" => 1,
            "team1_id" => 7,
            "team2_id" => 5,
            "tournament_id" => 1,
            "starting_date" => "{$first_date} 00:04:44",
            "status_id" => 1
        ]) ;

        Duel::create([
            "playoff_id" => 1,
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/BDylPCHPPEc",
            "game_id" => 1 ,
            "team1_score" => 1,
            "team2_score" => 2,
            "team1_id" => 3,
            "team2_id" => 6,
            "tournament_id" => 1,
            "starting_date" => "{$first_date} 00:05:44",
            "status_id" => 1
        ]) ;
        Duel::create([
            "playoff_id" => 1,
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/ATnRQbDrsmo",
            "game_id" => 1 ,
            "team1_score" => 1,
            "team2_score" => 2,
            "team1_id" => 2,
            "team2_id" => 8,
            "tournament_id" => 1,
            "starting_date" => "{$first_date} 00:05:44",
            "status_id" => 1
        ]) ;
        Duel::create([
            "playoff_id" => 2,
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/PrhxymP47Ro",
            "game_id" => 1,
            "team1_score" => 2,
            "team2_score" => 1,
            "team1_id" => 10,
            "team2_id" => 5,
            "tournament_id" => 1,
            "starting_date" => "{$first_date} 00:03:44",
            "status_id" => 1
        ]) ;
        Duel::create([
            "playoff_id" => 2,
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/QvOQcI44i4o",
            "game_id" => 1 ,
            "team1_score" => 2,
            "team2_score" => 0,
            "team1_id" => 3,
            "team2_id" => 2,
            "tournament_id" => 1,
            "starting_date" => "{$first_date} 00:03:44",
            "status_id" => 1
        ]) ;
        Duel::create([
            "playoff_id" => 3,
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/3vlM3aCgf_4",
            "game_id" => 1 ,
            "team1_score" => 0,
            "team2_score" => 2,
            "team1_id" => 1,
            "team2_id" => 7,
            "tournament_id" => 1,
            "starting_date" => "{$middle_date} 00:05:44",
            "status_id" => 1
        ]) ;
        Duel::create([
            "playoff_id" => 3,
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/QEkvFsRPkzY",
            "game_id" => 1 ,
            "team1_score" => 1,
            "team2_score" => 2,
            "team1_id" => 5,
            "team2_id" => 8,
            "tournament_id" => 1,
            "starting_date" => "{$middle_date} 00:05:44",
            "status_id" => 1
        ]) ;
        Duel::create([
            "playoff_id" => 4,
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/TuUwJ__pPkY",
            "game_id" => 1 ,
            "team1_score" => 1,
            "team2_score" => 2,
            "team1_id" => 6,
            "team2_id" => 10,
            "tournament_id" => 1,
            "starting_date" => "{$middle_date} 00:03:44",
            "status_id" => 1
        ]) ;
        Duel::create([
            "playoff_id" => 4,
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/Yox4y5aauHs",
            "game_id" => 1 ,
            "team1_score" => 0,
            "team2_score" => 2,
            "team1_id" => 1,
            "team2_id" => 3,
            "tournament_id" => 1,
            "starting_date" => "{$middle_date} 00:03:44",
            "status_id" => 1
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
            "starting_date" => "{$middle_date} 08:00:44",
            "status_id" => 3
        ]) ;
        Duel::create([
            "playoff_id" => 6,
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/TedvLKR_Uxc",
            "game_id" => 2 ,
            "team1_score" => null,
            "team2_score" => null,
            "team1_id" => 8,
            "team2_id" => 10,
            "tournament_id" => 1,
            "starting_date" => "{$middle_date} 09:06:44",
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
            "starting_date" => "{$last_date} 12:06:44",
            "status_id" => 3
        ]) ;



        Duel::create([
            "playoff_id" => 1 ,
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/bUuMhxY-RHE",
            "game_id" =>  2,
            "team1_score" => 1,
            "team2_score" => 2,
            "team1_id" => 18,
            "team2_id" => 16,
            "tournament_id" => 2,
            "starting_date" => "{$first_date} 12:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 1 ,
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/RkoQkUCEMog",
            "game_id" =>  2,
            "team1_score" => 1,
            "team2_score" => 2,
            "team1_id" => 21,
            "team2_id" => 15,
            "tournament_id" => 2,
            "starting_date" => "{$first_date} 12:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 3 ,
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/KN7fFRTYFbw",
            "game_id" =>  2,
            "team1_score" => 2,
            "team2_score" => 0,
            "team1_id" => 19,
            "team2_id" => 16,
            "tournament_id" => 2,
            "starting_date" => "{$middle_date} 00:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 3 ,
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/64LZbF7LtUo",
            "game_id" =>  2,
            "team1_score" => 0,
            "team2_score" => 2,
            "team1_id" => 14,
            "team2_id" => 15,
            "tournament_id" => 2,
            "starting_date" => "{$middle_date} 00:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 4 ,
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/22x7B33InjM",
            "game_id" =>  2,
            "team1_score" => 2,
            "team2_score" => 1,
            "team1_id" => 14,
            "team2_id" => 18,
            "tournament_id" => 2,
            "starting_date" => "{$middle_date} 00:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 4 ,
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/bWKcVil2kIE",
            "game_id" =>  2,
            "team1_score" => 0,
            "team2_score" => 2,
            "team1_id" => 16,
            "team2_id" => 21,
            "tournament_id" => 2,
            "starting_date" => "{$middle_date} 00:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 5 ,
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/nCJeHKq_n4Y",
            "game_id" =>  2,
            "team1_score" => 3,
            "team2_score" => 1,
            "team1_id" => 19,
            "team2_id" => 15,
            "tournament_id" => 2,
            "starting_date" => "{$middle_date} 00:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 6,
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/ksMjq5zE7Co",
            "game_id" =>  2,
            "team1_score" => null,
            "team2_score" => null,
            "team1_id" => 15,
            "team2_id" => 21,
            "tournament_id" => 2,
            "starting_date" => "{$middle_date} 10:06:44",
            "status_id" =>3
        ]) ;
        Duel::create([
            "playoff_id" => 7 ,
            "game_id" =>  2,
            "team1_score" => null,
            "team2_score" => null,
            "team1_id" => 19,
            "team2_id" => 21,
            "tournament_id" => 2,
            "starting_date" => "{$last_date} 23:06:44",
            "status_id" =>3
        ]) ;





        Duel::create([
            "playoff_id" => 1 ,
            "platform"=> "twitch",
            "video_link"=> "https://player.twitch.tv/?video=1815516953",
            "game_id" =>  1,
            "team1_score" => 3,
            "team2_score" => 1,
            "team1_id" => 26,
            "team2_id" => 25,
            "tournament_id" => 3,
            "starting_date" => "{$first_date} 12:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 1 ,
            "platform"=> "twitch",
            "video_link"=> "https://player.twitch.tv/?video=1816328537",
            "game_id" =>  1,
            "team1_score" => 0,
            "team2_score" => 3,
            "team1_id" => 30,
            "team2_id" => 27,
            "tournament_id" => 3,
            "starting_date" => "{$first_date} 12:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 1 ,
            "platform"=> "twitch",
            "video_link"=> "https://player.twitch.tv/?video=1817168884",
            "game_id" =>  1,
            "team1_score" => 0,
            "team2_score" => 3,
            "team1_id" => 28,
            "team2_id" => 23,
            "tournament_id" => 3,
            "starting_date" => "{$first_date} 12:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 1 ,
            "platform"=> "twitch",
            "video_link"=> "https://player.twitch.tv/?video=1817982950",
            "game_id" =>  1,
            "team1_score" => 3,
            "team2_score" => 0,
            "team1_id" => 29,
            "team2_id" => 31,
            "tournament_id" => 3,
            "starting_date" => "{$first_date} 12:06:44",
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
            "starting_date" => "{$first_date} 12:06:44",
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
            "starting_date" => "{$first_date} 00:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 3 ,
            "platform"=> "twitch",
            "video_link"=> "https://player.twitch.tv/?video=1819067656",
            "game_id" =>  1,
            "team1_score" => 2,
            "team2_score" => 3,
            "team1_id" => 26,
            "team2_id" => 27,
            "tournament_id" => 3,
            "starting_date" => "{$middle_date} 00:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 3 ,
            "platform"=> "twitch",
            "video_link"=> "https://player.twitch.tv/?video=1819950359",
            "game_id" =>  1,
            "team1_score" => 0,
            "team2_score" => 3,
            "team1_id" => 23,
            "team2_id" => 29,
            "tournament_id" => 3,
            "starting_date" => "{$middle_date} 00:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 4 ,
            "platform"=> "twitch",
            "video_link"=> "https://player.twitch.tv/?video=1821277241",
            "game_id" =>  1,
            "team1_score" => 3,
            "team2_score" => 1,
            "team1_id" => 23,
            "team2_id" => 25,
            "tournament_id" => 3,
            "starting_date" => "{$middle_date} 00:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 4 ,
            "platform"=> "twitch",
            "video_link"=> "https://player.twitch.tv/?video=1822327348",
            "game_id" =>  1,
            "team1_score" => 3,
            "team2_score" => 0,
            "team1_id" => 26,
            "team2_id" => 28,
            "tournament_id" => 3,
            "starting_date" => "{$middle_date} 00:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 5 ,
            "game_id" =>  1,
            "platform"=> "twitch",
            "video_link"=> "https://player.twitch.tv/?video=1824014284",
            "team1_score" => 2,
            "team2_score" => 3,
            "team1_id" => 27,
            "team2_id" => 29,
            "tournament_id" => 3,
            "starting_date" => "{$middle_date} 00:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 6 ,
            "platform"=> "twitch",
            "video_link"=> "https://player.twitch.tv/?video=1824914338",
            "game_id" =>  1,
            "team1_score" => null,
            "team2_score" => null,
            "team1_id" => 27,
            "team2_id" => 23,
            "tournament_id" => 3,
            "starting_date" => "{$middle_date} 22:06:44",
            "status_id" =>3
        ]) ;
        Duel::create([
            "playoff_id" => 7 ,
            "platform"=> "twitch",
            "video_link"=> "https://player.twitch.tv/?video=1823906574",
            "game_id" =>  1,
            "team1_score" => null,
            "team2_score" => null,
            "team1_id" => 29,
            "team2_id" => 23,
            "tournament_id" => 3,
            "starting_date" => "{$last_date} 22:06:44",
            "status_id" =>3
        ]) ;
        Duel::create([
            "playoff_id" => 1,
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/DL--dss1iAU",
            "game_id" =>  2,
            "team1_score" => 1,
            "team2_score" => 3,
            "team1_id" => 34,
            "team2_id" => 33,
            "tournament_id" => 4,
            "starting_date" => "{$first_date} 00:06:44",
            "status_id" => 1
        ]) ;
        Duel::create([
            "playoff_id" =>1 ,
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/aRUlv4KfOUg",
            "game_id" => 2 ,
            "team1_score" => 3,
            "team2_score" => 1,
            "team1_id" => 35,
            "team2_id" => 39,
            "tournament_id" => 4,
            "starting_date" => "{$first_date} 0:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" => 3,
            "platform"=>"youtube",
            "video_link"=>"https://www.youtube.com/embed/RZP3em0kQkU",
            "game_id" =>  2,
            "team1_score" => null,
            "team2_score" => null,
            "team1_id" => 34,
            "team2_id" => 35,
            "tournament_id" => 4,
            "starting_date" => "{$middle_date} 20:06:44",
            "status_id" =>3
        ]) ;
        Duel::create([
            "playoff_id" =>7 ,
            "game_id" => 2 ,
            "team1_score" => null,
            "team2_score" => null,
            "team1_id" =>34 ,
            "team2_id" => 33,
            "tournament_id" => 4,
            "starting_date" => "{$last_date} 0:06:44",
            "status_id" =>3
        ]) ;
        Duel::create([
            "playoff_id" =>1 ,
            "game_id" => 3 ,
            "team1_score" => 3,
            "team2_score" => 1,
            "team1_id" =>41 ,
            "team2_id" => 42,
            "tournament_id" => 5,
            "starting_date" => "{$first_date} 0:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" =>1 ,
            "game_id" => 3 ,
            "team1_score" => 2,
            "team2_score" => 0,
            "team1_id" =>43 ,
            "team2_id" => 44,
            "tournament_id" => 5,
            "starting_date" => "{$first_date} 0:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" =>1 ,
            "game_id" => 3 ,
            "team1_score" => 1,
            "team2_score" => 2,
            "team1_id" =>45 ,
            "team2_id" => 46,
            "tournament_id" => 5,
            "starting_date" => "{$first_date} 0:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" =>3 ,
            "game_id" => 3 ,
            "team1_score" => 3,
            "team2_score" => 2,
            "team1_id" =>43 ,
            "team2_id" => 46,
            "tournament_id" => 5,
            "starting_date" => "{$middle_date} 00:06:44",
            "status_id" =>1
        ]) ;
        Duel::create([
            "playoff_id" =>4 ,
            "game_id" => 3 ,
            "team1_score" => null,
            "team2_score" => null,
            "team1_id" =>41 ,
            "team2_id" => 46,
            "tournament_id" => 5,
            "starting_date" => "{$middle_date} 02:06:44",
            "status_id" =>3
        ]) ;
        Duel::create([
            "playoff_id" =>7 ,
            "game_id" => 3 ,
            "team1_score" => null,
            "team2_score" => null,
            "team1_id" =>41 ,
            "team2_id" => 43,
            "tournament_id" => 5,
            "starting_date" => "{$last_date} 10:06:44",
            "status_id" =>3
        ]) ;
    }
}
