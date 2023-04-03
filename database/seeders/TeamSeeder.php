<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
//        Team::create([
//            "logo" => "https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/5/59/SK_Telecom_T1logo_square.png/revision/latest/scale-to-width-down/220?cb=20221015010024",
//            "name" => "SKT T1" ,
//            "description" => "is a Korean professional gaming team based in South Korea. Previously, the SK Telecom organization sponsored two sister teams, S and K. SK Telecom T1 is the only team to have won the World Championship three times and is also the only team to hold an unofficial Triple Crown - in May 2016 they became the reigning champions of IEM, the Mid-Season Invitational, and Worlds though those titles were not all achieved in the same season, before successfully being the first ever team to defend their World Championship title.",
//            "history" => "In December 2012, SK Telecom acquired the roster of Eat Sleep Game, with a roster consisting of Reapered, H0R0, MighTiLy, UandME, and StarLast. See the history of that team at SK Telecom T1 S (originally SK Telecom T1, then SK Telecom T1 #1). In February 2013, the organization created a new roster, which consisted of Faker, bengi, Piglet, PoohManDu, and Impact. See the history of that team at SK Telecom T1 K (originally SK Telecom T1 #2). On November 12, the sister teams were renamed from #1 and #2 to S and K, respectively. Though it was initially known as SK Telecom's secondary team, K outperformed S, winning the Season 3 World Championship. Upon their return to Korea, SKT T1 K became the only team to have a perfect season (not losing a single game) in Champions Winter 2013-2014.",
//        ]) ;
        Team::create([
            "logo" => "https://static.lolesports.com/teams/1631819456274_dwg-kia-2021-worlds.png",
            "name" => "DWG KIA" ,
            "description" => "",
            "history" => "",
        ]) ;
        Team::create([
            "logo" => "https://static.lolesports.com/teams/1644501567410_PSG_3.png",
            "name" => "PSG Talon" ,
            "description" => "",
            "history" => "",
        ]) ;
        Team::create([
            "logo" => "https://lolstatic-a.akamaihd.net/esports-assets/production/team/pentanetgg-3vnqnv03.png",
            "name" => "Pentanet.GG" ,
            "description" => "",
            "history" => "",
        ]) ;
        Team::create([
            "logo" => "https://static.lolesports.com/teams/1631820065346_cloud9-2021-worlds.png",
            "name" => "Cloud9" ,
            "description" => "",
            "history" => "",
        ]) ;
        Team::create([
            "logo" => "http://static.lolesports.com/teams/1631819360134_rng-2021-worlds.png",
            "name" => "Royal Never Give Up" ,
            "description" => "",
            "history" => "",
        ]) ;
        Team::create([
            "logo" => "http://static.lolesports.com/teams/1631819614211_mad-2021-worlds.png",
            "name" => "MAD Lions" ,
            "description" => "",
            "history" => "",
        ]) ;
        Team::factory(32)->create() ;
    }
}
