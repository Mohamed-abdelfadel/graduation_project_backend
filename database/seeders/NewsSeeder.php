<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\news ;
class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            "image" => "https://images.contentstack.io/v3/assets/bltb730eada072bdbf4/blte2c0dcec8472d272/636476dc2d2a144cc90497fb/GCC_Primer_Article_Header.jpg?width=519&height=" ,
            "title" => "VALORANT GAME CHANGERS CHAMPIONSHIP : EVERYTHING YOU NEED TO KNOW" ,
            "description" => "Everything you need to know about the upcoming international capstone event for Game Changers 2022.",
            "author" => "VALORANT E-Sports ©",
        ]) ;
    }
}
