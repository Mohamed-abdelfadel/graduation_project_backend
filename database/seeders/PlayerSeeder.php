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
            "image" => "https://koreajoongangdaily.joins.com/data/photo/2021/04/05/0d3b419b-20c3-4bd4-ba95-45707a1038a0.jpg" ,
            "name" => "Faker" ,
            "description" => "Player in SKT1 team",
            "history" => "Lee Faker Sang-hyeok (born May 7, 1996) is a Korean player who is currently playing as a Midlaner for T1. Faker has won 3 World Championships (2013, 2015, 2016) and 2 Mid-Season Invitationals (2016, 2017), and has 10 combined LCK and Champions Korea titles",
        ]) ;
        Player::factory(100)->create() ;

    }
}
