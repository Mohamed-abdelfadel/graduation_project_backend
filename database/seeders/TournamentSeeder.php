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
//        Tournament::create([
//            "logo" => "https://upload.wikimedia.org/wikipedia/en/5/5f/LOL_Worlds_logo.svg",
//            "name" => "League of Legends WORLDS 2022" ,
//            "description" => "It’s time for the 2022 League of Legends World Championship! The tournament will kick off September 29 in the Arena Esports Stadium at Artz Pedregal in Mexico City.",
//            "starting_date" => "2022-11-5 6:00:00",
//            "ending_date" => "2022-09-29 6:00:00",
//
//        ]) ;
        Tournament::factory(20)->create() ;
    }
}
