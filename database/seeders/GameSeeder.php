<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game ;
class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::create([
            "image" => "https://static-cdn.jtvnw.net/ttv-boxart/516575-272x380.jpg" ,
            "name" => "Valorant" ,
            "description" => "VALORANT is a global arena in which you can compete. It is a 5v5 tactical shooter in which players can take turns planting and deactivating the spike with a system of 1 life per LI round in a series of 13 rounds. What you'll need more than guns and bullets is choosing an Operator equipped with fast, lethal, and adaptable abilities to create the right opportunities for you to dazzle everyone with your superior gun skills.",
            "company" => "Riot Games",
            "published_date" => "2020-6-2"
        ]) ;

        Game::create([
            "image" => "https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_LeagueofLegends_RiotGames_S2_1200x1600-7fd64f0f7b674900bdd172967865d545" ,
            "name" => "League of Legends" ,
            "description" => "League of Legends is a team-based strategy game where two teams of five powerful champions face off to destroy the other’s base. Choose from over 140 champions to make epic plays, secure kills, and take down towers as you battle your way to victory.",
            "company" => "Riot Games",
            "published_date" => "2009-10-27"
        ]) ;

        Game::create([
            "image" => "https://cdn1.epicgames.com/offer/fn/23BR_C4S1_EGS_Launcher_Blade_1200x1600_1200x1600-708ad0c7e0813b60cb2fda3e24e39401" ,
            "name" => "Fortnite" ,
            "description" => "Fortnite is a third person shooter survival game where the player has to survive against up to 99 other players. The total player count for each battle royale is 100. The player can build forts through collecting materials such as metal, bricks, and wood, and collect weapons before fighting other players",
            "company" => "Epic Games",
            "published_date" => "2017-7-21"
        ]) ;
    }
}
