<?php

namespace Database\Seeders;

use App\Models\Tournament;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Valorant Tournaments

        Tournament::create([
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/c/c9/2022_VCT_Stage_1_Masters_logo.png",
            "name" => "Valorant Masters",
            "game_id" => 1,
            "description" => "Valorant Masters is an international tournament for the competitive Valorant scene, featuring top teams from around the world.",
            "total_prize" => 1000000,
            "location" => "Reykjavik, Iceland",
            "first_team_prize" => 500000,
            "second_team_prize" => 350000,
            "third_team_prize" => 150000,
            "starting_date" => "2023-5-01 10:00:00",
            "status_id" => 2
        ]);
        Tournament::create([
            "logo" => "https://cdn.esportsdriven.com/media/events/logos/600px-VCT_2023_Americas_League_allmode.large.png",
            "name" => "Americas League",
            "game_id" => 1,
            "description" => "Part of the Valorant Champions Tour, Riot's official 2023 tournament circuit",
            "total_prize" => 250000 ,
            "location" => "Los Angeles, USA",
            "first_team_prize" => 125000,
            "second_team_prize" => 83340,
            "third_team_prize" => 41660,
            "starting_date" => "2023-5-01 10:00:00",
            "status_id" => 2
        ]);


// League of Legends Tournaments
        Tournament::create([
            "logo" => "https://upload.wikimedia.org/wikipedia/en/e/e7/LOL_MSI_logo.svg",
            "name" => "League of Legends World Championship",
            "game_id" => 2,
            "description" => "The League of Legends World Championship is the pinnacle of competitive League of Legends play, featuringthe best teams from around the world competing for a multi-million dollar prize pool.",
            "total_prize" => 6000000,
            "location" => "Untied states",
            "first_team_prize" => 2700000,
            "second_team_prize" => 1050000,
            "third_team_prize" => 630000,
            "starting_date" => "2023-4-29 12:00:00",
            "status_id" => 2
        ]);
        Tournament::create([
            "logo" => "https://egamersworld.com/uploads/tournaments/arabian-league-20231674049594125-logo-1.png",
            "name" => "Arabian League" ,
            "game_id" => 2 ,
            "description" => "The Arabian League 2023 Spring Season ('AL') is the first season of Riot Games' official Middle East and North Africa League of Legends league as part of the EMEA ERL ecosystem.",
            "total_prize" => 1000000,
            "location" => " Middle East",
            "first_team_prize" => 500000,
            "second_team_prize" => 350000,
            "third_team_prize" => 150000,
            "starting_date" => "2023-05-19 1:00:00",
            "status_id" => 1
        ]) ;
//        Tournament::create([
//            "logo" => "https://img.redbull.com/images/e_trim:10:transparent/c_limit,w_1000,h_1000/bo_5px_solid_rgb:00000000/q_auto,f_png/redbullcom/2021/1/19/fq0bsevvgrrjv71s9cgs/red-bull-campus-clutch-main",
//            "name" => "Red Bull Campus Clutch 2022 - World Final Stage" ,
//            "game_id" => 2 ,
//            "description" => "Red Bull Campus Clutch is a tournament hosted by Red Bull hosting students from over 50 countries.",
//            "total_prize" => 1000000,
//            "location" => "São Paulo, Brazil",
//            "first_team_prize" => 500000,
//            "second_team_prize" => 350000,
//            "third_team_prize" => 150000,
//            "starting_date" => "2023-05-29 1:00:00",
//            "status_id" => 1
//
//        ]) ;
//        Tournament::create([
//            "logo" => "https://upload.wikimedia.org/wikipedia/en/5/5f/LOL_Worlds_logo.svg",
//            "name" => "League of Legends World Championship",
//            "game_id" => 2,
//            "description" => "The League of Legends World Championship is the culmination of the competitive League of Legends season. Teams from all over the world compete for the title of world champion and a share of the massive prize pool.",
//            "total_prize" => 6000000,
//            "location" => "Shenzhen, China",
//            "first_team_prize" => 2700000,
//            "second_team_prize" => 1050000,
//            "third_team_prize" => 630000,
//            "starting_date" => "2023-10-05 12:00:00",
//            "status_id" => 1
//        ]);
//        Tournament::create([
//            "logo" => "https://example.com/league_tournament2.png",
//            "name" => "Mid-Season Invitational",
//            "game_id" => 2,
//            "description" => "The Mid-Season Invitational is a tournament held during the mid-season of the competitive League of Legends season, featuring top teams from each region.",
//            "total_prize" => 2000000,
//            "location" => "Paris, France",
//            "first_team_prize" => 1000000,
//            "second_team_prize" => 500000,
//            "third_team_prize" => 250000,
//            "starting_date" => "2023-05-30 10:00:00",
//            "status_id" => 1
//        ]);
//
//        Tournament::create([
//            "logo" => "https://example.com/league_tournament3.png",
//            "name"=> "League of Legends Championship Series Finals",
//            "game_id" => 2,
//            "description" => "The League of Legends Championship Series Finals is the championship match of the North American League of Legends Championship Series, featuring the top two teams from the regular season.",
//            "total_prize" => 500000,
//            "location" => "Los Angeles, USA",
//            "first_team_prize" => 250000,
//            "second_team_prize" => 100000,
//            "third_team_prize" => 50000,
//            "starting_date" => "2023-08-25 14:00:00",
//            "status_id" => 1
//        ]);
//
//// Rocket League Tournaments
//        Tournament::create([
//            "logo" => "https://example.com/rocket_league_tournament1.png",
//            "name" => "Rocket League Championship Series",
//            "game_id" => 3,
//            "description" => "The Rocket League Championship Series is the premier event for the competitive Rocket League scene, featuring top teams from around the world.",
//            "total_prize" => 1000000,
//            "location" => "Amsterdam, Netherlands",
//            "first_team_prize" => 500000,
//            "second_team_prize" => 250000,
//            "third_team_prize" => 100000,
//            "starting_date" => "2023-11-10 13:00:00",
//            "status_id" => 1
//        ]);
//
//        Tournament::create([
//            "logo" => "https://example.com/rocket_league_tournament2.png",
//            "name" => "Rocket League Championship Series Regional",
//            "game_id" => 3,
//            "description" => "The Rocket League Championship Series Regional is a series of regional tournaments for the competitive Rocket League scene, featuring top teams from each region.",
//            "total_prize" => 500000,
//            "location" => "Dallas, USA",
//            "first_team_prize" => 250000,
//            "second_team_prize" => 100000,
//            "third_team_prize" => 50000,
//            "starting_date" => "2023-07-01 12:00:00",
//            "status_id" => 1
//        ]);
//
//        Tournament::create([
//            "logo" => "https://example.com/rocket_league_tournament3.png",
//            "name" => "Rocket League Summit",
//            "game_id" => 3,
//            "description" => "The Rocket League Summit is an invite-only tournament for the competitive Rocket League scene, featuring top teams from around the world.",
//            "total_prize" => 100000,
//            "location" => "Denver, USA",
//            "first_team_prize" => 50000,
//            "second_team_prize" => 25000,
//            "third_team_prize" => 15000,
//            "starting_date" => "2023-09-15 10:00:00",
//            "status_id" => 1
//        ]);
    }
}
