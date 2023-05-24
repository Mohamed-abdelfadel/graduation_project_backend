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

        //Valorant teams
        Team::create([
            "logo" => "https://cdn.shopify.com/s/files/1/0548/8554/8183/files/G2-Esports-2020-Logo_87bf0678-e67f-4834-8b09-e56137ffaa80.png?v=1641913940",
            "name" => "G2 Esports" ,
            "description" => "G2 Esports (formerly known as Gamers2) is a German professional esports organization located in Berlin, and founded in November 2013 by Carlos 'ocelote' Rodriguez.",
            "history" => "G2 Esports entered VALORANT in June 2020, and have since become one of the most successful European organizations in the game, winning every Ignition Series event in the region.",
        ]) ;
        Team::create([
            "logo" => "https://cdn.escharts.com/uploads/public/620/131/e9c/620131e9cc337400582897.png",
            "name" => "The Guard" ,
            "description" => "The Guard is an American organization formed by Kroenke Sports & Entertainment to represent their esports brand.",
            "history" => "",
        ]) ;
        Team::create([
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Paper_Rex_logo.svg/1200px-Paper_Rex_logo.svg.png",
            "name" => "Paper Rex" ,
            "description" => "Paper Rex is a Southeast Asian esports organization based in Singapore. It was founded in January 2020 by legendary Counter-Strike player, Harley 'dsn' Örwall, together with the founder and chief editor of CSGO2ASIA, Nikhil 'nikH' Hathiramani.",
            "history" => "",
        ]) ;
        Team::create([
            "logo" => "https://upload.wikimedia.org/wikipedia/en/thumb/4/43/Esports_organization_Fnatic_logo.svg/1200px-Esports_organization_Fnatic_logo.svg.png",
            "name" => "Fnatic" ,
            "description" => "Fnatic is a professional esports organization based in London, United Kingdom.",
            "history" => "",
        ]) ;
        Team::create([
            "logo" => "https://www.nicepng.com/png/full/440-4403304_team-liquid.png",
            "name" => "Team Liquid" ,
            "description" => "Team Liquid is a professional esports organization founded in the Netherlands in 2000. Originally a Brood War clan, the team switched to StarCraft II during the SC2 Beta in 2010, and became one of the most successful foreign teams. On August 7, 2020, Team Liquid entered VALORANT by signing fish123.",
            "history" => "",
        ]) ;
        Team::create([
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/3/34/DRX_logo_2023.png",
            "name" => "DRX" ,
            "description" => "DRX is a Korean VALORANT team formed by the acquision of former Vision Strikers roster. DRX were previously known as KING-ZONE DragonX and DragonX. They currently also field a team in League of Legends.",
            "history" => "",
        ]) ;
        Team::create([
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/LOUD_logo.svg/640px-LOUD_logo.svg.png",
            "name" => "LOUD" ,
            "description" => "LOUD is a Brazilian multi-gaming organization.",
            "history" => "",
        ]) ;
        Team::create([
            "logo" => "https://seeklogo.com/images/O/optic-gaming-logo-85885D7C66-seeklogo.com.png",
            "name" => "OpTic Gaming" ,
            "description" => "OpTic Gaming is an American esports organization primarily known for its Call of Duty team. On June 12, 2019, the organization was acquired by Immortals Gaming Club which was then later reacquired by OpTic Gaming's founder Hector 'H3CZ' Rodriguez on November 11, 2020.",
            "history" => "",
        ]) ;
        Team::create([
            "logo" => "https://egamersworld.com/uploads/valorant/teams/xerxia-logo.png",
            "name" => "XERXIA" ,
            "description" => "https://liquipedia.net/valorant/XERXIA",
            "history" => "",
        ]) ;
        Team::create([
            "logo" => "https://seeklogo.com//images/Z/zeta-division-logo-7F7AAA5279-seeklogo.com.png",
            "name" => "ZETA DIVISION" ,
            "description" => "ZETA DIVISION is a Japanese Esports organisation; it was formerly named as JUPITER. They also feature players and teams in Brawl Stars, Super Smash Bros. Ultimate, Fortnite and PUBG Mobile.",
            "history" => "ZETA DIVISION, formerly known as JUPITER, entered VALORANT in April 2020. They have become one of the most successful teams in Japan since the early days of the game, winning the Japanese Ignition Series and First Strike Japan.",
        ]) ;
        Team::create([
            "logo" => "https://upload.wikimedia.org/wikipedia/tr/1/17/KR%C3%9C_Esports_logo.png",
            "name" => "KRÜ" ,
            "description" => "KRÜ Esports is an Argentine organization focused on the esports and content creation scenes with the goal of bringing this world to a wider audience with the support of Sergio Agüero as founder and helping with the connection between the traditional and virtual sports scene.",
            "history" => "",
        ]) ;
        Team::create([
            "logo" => "https://cdn.shopify.com/s/files/1/1516/5886/files/NIP-Symbol-RGB-Black_65f83867-93c0-488d-bbaf-aea6c127af0e_400x.png?v=1613771259",
            "name" => "Ninjas in Pyjamas" ,
            "description" => "Ninjas in Pyjamas (often abbreviated to NIP and previously NiP) is a Swedish esports organization which was founded in 2000. The team competed in Counter-Strike until their dissolution in 2007. In 2012, the team returned with a now heavily renowned Counter-Strike: Global Offensive squad and have branched out in a large variety of games.",
            "history" => "Ninjas in Pyjamas entered Valorant in the closed beta with the signing of their former European Paladins World Championship winning roster. The roster shortly fell apart after a total of two months, with the organization opting to rebuild entirely with rhyme.",
        ]) ;
//        Team::create([
//            "logo" => "",
//            "name" => "" ,
//            "description" => "",
//            "history" => "",
//        ]) ;
//
//        Team::create([
//            "logo" => "https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/5/59/SK_Telecom_T1logo_square.png/revision/latest/scale-to-width-down/220?cb=20221015010024",
//            "name" => "SKT T1" ,
//            "description" => "is a Korean professional gaming team based in South Korea. Previously, the SK Telecom organization sponsored two sister teams, S and K. SK Telecom T1 is the only team to have won the World Championship three times and is also the only team to hold an unofficial Triple Crown - in May 2016 they became the reigning champions of IEM, the Mid-Season Invitational, and Worlds though those titles were not all achieved in the same season, before successfully being the first ever team to defend their World Championship title.",
//            "history" => "In December 2012, SK Telecom acquired the roster of Eat Sleep Game, with a roster consisting of Reapered, H0R0, MighTiLy, UandME, and StarLast. See the history of that team at SK Telecom T1 S (originally SK Telecom T1, then SK Telecom T1 #1). In February 2013, the organization created a new roster, which consisted of Faker, bengi, Piglet, PoohManDu, and Impact. See the history of that team at SK Telecom T1 K (originally SK Telecom T1 #2). On November 12, the sister teams were renamed from #1 and #2 to S and K, respectively. Though it was initially known as SK Telecom's secondary team, K outperformed S, winning the Season 3 World Championship. Upon their return to Korea, SKT T1 K became the only team to have a perfect season (not losing a single game) in Champions Winter 2013-2014.",
//        ]) ;
//        Team::create([
//            "logo" => "https://static.lolesports.com/teams/1631819456274_dwg-kia-2021-worlds.png",
//            "name" => "DWG KIA" ,
//            "description" => "",
//            "history" => "",
//        ]) ;
//        Team::create([
//            "logo" => "https://static.lolesports.com/teams/1644501567410_PSG_3.png",
//            "name" => "PSG Talon" ,
//            "description" => "",
//            "history" => "",
//        ]) ;
//        Team::create([
//            "logo" => "https://lolstatic-a.akamaihd.net/esports-assets/production/team/pentanetgg-3vnqnv03.png",
//            "name" => "Pentanet.GG" ,
//            "description" => "",
//            "history" => "",
//        ]) ;
//        Team::create([
//            "logo" => "https://static.lolesports.com/teams/1631820065346_cloud9-2021-worlds.png",
//            "name" => "Cloud9" ,
//            "description" => "",
//            "history" => "",
//        ]) ;
//        Team::create([
//            "logo" => "http://static.lolesports.com/teams/1631819360134_rng-2021-worlds.png",
//            "name" => "Royal Never Give Up" ,
//            "description" => "",
//            "history" => "",
//        ]) ;
//        Team::create([
//            "logo" => "http://static.lolesports.com/teams/1631819614211_mad-2021-worlds.png",
//            "name" => "MAD Lions" ,
//            "description" => "",
//            "history" => "",
//        ]) ;
//        Team::factory(32)->create() ;
    }
}
