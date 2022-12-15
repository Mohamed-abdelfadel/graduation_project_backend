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
            "image" => "https://yt3.googleusercontent.com/q7bQAvHp_Hb3k29VZWaYLosPDKT4DORz3CgHQESF52KuEEtsAyLx9F3OToP_ZTuFEGl70e7XYA=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" ,
            "name" => "League of Legends" ,
            "description" => "League of Legends is a team-based strategy game where two teams of five powerful champions face off to destroy the other’s base. Choose from over 140 champions to make epic plays, secure kills, and take down towers as you battle your way to victory.",
            "company" => "Riot Games",
            "published_date" => "2009-10-27"
            ]) ;

        Game::create([
            "image" => "https://yt3.googleusercontent.com/HAFku1ALrKk_KCS0QcMTxwz2BBOHOcxciIwrFsGAs9qrlbQNJuWkPtldNbDZv3Kh9tAp9XvI1w=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" ,
            "name" => "Valorant" ,
            "description" => "VALORANT is a global arena in which you can compete. It is a 5v5 tactical shooter in which players can take turns planting and deactivating the spike with a system of 1 life per LI round in a series of 13 rounds. What you'll need more than guns and bullets is choosing an Operator equipped with fast, lethal, and adaptable abilities to create the right opportunities for you to dazzle everyone with your superior gun skills.",
            "company" => "Riot Games",
            "published_date" => "2020-6-2"
        ]) ;

        Game::create([
            "image" => "https://yt3.googleusercontent.com/K6gOSneCU4qtO-YXz748D_xNCFLWVWh-iaYeONnPN5uYO6zL6H4cBXtc20S0PE4CyBk-dYZm=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" ,
            "name" => "Fortnite" ,
            "description" => "Fortnite is a third person shooter survival game where the player has to survive against up to 99 other players. The total player count for each battle royale is 100. The player can build forts through collecting materials such as metal, bricks, and wood, and collect weapons before fighting other players",
            "company" => "Epic Games",
            "published_date" => "2017-7-21"
        ]) ;
    }
}
