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
        Tournament::create([
            "logo" => "https://graduation-project-frontend-48ux-git-test-ahmmed-hassan.vercel.app/assets/icons/Events_valchamp_1611007517927%204.svg",
            "name" => "MSI - Champions Istanbul" ,
            "game_id" => 2 ,
            "description" => "It’s time for the 2022 League of Legends World Championship! The tournament will kick off September 29 in the Arena Esports Stadium at Artz Pedregal in Mexico City.",
            "total_prize" => 3000,
            "location" => "São Paulo, Brazil",
            "first_team_prize" => 2000,
            "second_team_prize" => 1250,
            "third_team_prize" => 750,
            "starting_date" => "2022-04-03 1:00:00",
            "status_id" => 1

        ]) ;
        Tournament::create([
            "logo" => "https://img.redbull.com/images/e_trim:10:transparent/c_limit,w_1000,h_1000/bo_5px_solid_rgb:00000000/q_auto,f_png/redbullcom/2021/1/19/fq0bsevvgrrjv71s9cgs/red-bull-campus-clutch-main",
            "name" => "Red Bull Campus Clutch 2022 - World Final Stage" ,
            "game_id" => 2 ,
            "description" => "Red Bull Campus Clutch is a tournament hosted by Red Bull hosting students from over 50 countries.",
            "total_prize" => 3000.23,
            "location" => "São Paulo, Brazil",
            "first_team_prize" => 2000,
            "second_team_prize" => 1250,
            "third_team_prize" => 750,
            "starting_date" => "2022-04-03 1:00:00",
            "status_id" => 1

        ]) ;
        Tournament::factory(8)->create() ;
    }
}
