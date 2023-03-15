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
            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Rocket_League_coverart.jpg/600px-Rocket_League_coverart.jpg" ,
            "name" => "Rocket League" ,
            "description" => "Rocket League is a fantastical sport-based video game, developed by Psyonix. It features a competitive game mode based on teamwork and outmaneuvering opponents. Players work with their team to advance the ball down the field, and score goals in their opponents' net.",
            "company" => "Psyonix",
            "published_date" => "2015-7-21"
        ]) ;
    }
}
