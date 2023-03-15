<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Player::create([
            "image" => "https://assets-sports.thescore.com/soccer/team/141/logo.png" ,
            "name" => "Faker" ,
            "description" => "Player in SKT1 team",
            "history" => "Lee Faker Sang-hyeok (born May 7, 1996) is a Korean player who is currently playing as a Midlaner for T1. Faker has won 3 World Championships (2013, 2015, 2016) and 2 Mid-Season Invitationals (2016, 2017), and has 10 combined LCK and Champions Korea titles",
        ]) ;
        Player::factory(100)->create() ;

    }
}
