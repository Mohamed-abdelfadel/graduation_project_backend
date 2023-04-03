<?php

namespace Database\Seeders;

use App\Models\Tournament_news;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TournamentNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tournament_news::create([
            "image" => "https://img.redbull.com/images/e_trim:10:transparent/c_limit,w_1000,h_1000/bo_5px_solid_rgb:00000000/q_auto,f_png/redbullcom/2021/1/19/fq0bsevvgrrjv71s9cgs/red-bull-campus-clutch-main",
            "title" => "Red Bull Campus Clutch 2022 - World Final Stage" ,
            "tournament_id" => 1,
            "description" => "World Final Stage is open for now you can sign up there!",
            "author" => "league of legends",
        ]) ;
    }
}
