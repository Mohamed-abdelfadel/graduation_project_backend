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
        //tournament 1
        Team::create([
            "tournament_id" => 1,
            "logo" => "https://cdn.shopify.com/s/files/1/0548/8554/8183/files/G2-Esports-2020-Logo_87bf0678-e67f-4834-8b09-e56137ffaa80.png?v=1641913940",
            "name" => "G2 Esports" ,
            "description" => "G2 Esports (formerly known as Gamers2) is a German professional esports organization located in Berlin, and founded in November 2013 by Carlos 'ocelote' Rodriguez.",
            "history" => "G2 Esports entered VALORANT in June 2020, and have since become one of the most successful European organizations in the game, winning every Ignition Series event in the region.",
        ]) ;
        Team::create([
            "tournament_id" => 1,
            "logo" => "https://cdn.escharts.com/uploads/public/620/131/e9c/620131e9cc337400582897.png",
            "name" => "The Guard" ,
            "description" => "The Guard is an American organization formed by Kroenke Sports & Entertainment to represent their esports brand.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 1,
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Paper_Rex_logo.svg/1200px-Paper_Rex_logo.svg.png",
            "name" => "Paper Rex" ,
            "description" => "Paper Rex is a Southeast Asian esports organization based in Singapore. It was founded in January 2020 by legendary Counter-Strike player, Harley 'dsn' Örwall, together with the founder and chief editor of CSGO2ASIA, Nikhil 'nikH' Hathiramani.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 1,
            "logo" => "https://upload.wikimedia.org/wikipedia/en/thumb/4/43/Esports_organization_Fnatic_logo.svg/1200px-Esports_organization_Fnatic_logo.svg.png",
            "name" => "Fnatic" ,
            "description" => "Fnatic is a professional esports organization based in London, United Kingdom.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 1,
            "logo" => "https://www.nicepng.com/png/full/440-4403304_team-liquid.png",
            "name" => "Team Liquid" ,
            "description" => "Team Liquid is a professional esports organization founded in the Netherlands in 2000. Originally a Brood War clan, the team switched to StarCraft II during the SC2 Beta in 2010, and became one of the most successful foreign teams. On August 7, 2020, Team Liquid entered VALORANT by signing fish123.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 1,
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/3/34/DRX_logo_2023.png",
            "name" => "DRX" ,
            "description" => "DRX is a Korean VALORANT team formed by the acquision of former Vision Strikers roster. DRX were previously known as KING-ZONE DragonX and DragonX. They currently also field a team in League of Legends.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 1,
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/LOUD_logo.svg/640px-LOUD_logo.svg.png",
            "name" => "LOUD" ,
            "description" => "LOUD is a Brazilian multi-gaming organization.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 1,
            "logo" => "https://seeklogo.com/images/O/optic-gaming-logo-85885D7C66-seeklogo.com.png",
            "name" => "OpTic Gaming" ,
            "description" => "OpTic Gaming is an American esports organization primarily known for its Call of Duty team. On June 12, 2019, the organization was acquired by Immortals Gaming Club which was then later reacquired by OpTic Gaming's founder Hector 'H3CZ' Rodriguez on November 11, 2020.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 1,
            "logo" => "https://egamersworld.com/uploads/valorant/teams/xerxia-logo.png",
            "name" => "XERXIA" ,
            "description" => "https://liquipedia.net/valorant/XERXIA",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 1,
            "logo" => "https://seeklogo.com//images/Z/zeta-division-logo-7F7AAA5279-seeklogo.com.png",
            "name" => "ZETA DIVISION" ,
            "description" => "ZETA DIVISION is a Japanese Esports organisation; it was formerly named as JUPITER. They also feature players and teams in Brawl Stars, Super Smash Bros. Ultimate, Fortnite and PUBG Mobile.",
            "history" => "ZETA DIVISION, formerly known as JUPITER, entered VALORANT in April 2020. They have become one of the most successful teams in Japan since the early days of the game, winning the Japanese Ignition Series and First Strike Japan.",
        ]) ;
        Team::create([
            "tournament_id" => 1,
            "logo" => "https://upload.wikimedia.org/wikipedia/tr/1/17/KR%C3%9C_Esports_logo.png",
            "name" => "KRÜ" ,
            "description" => "KRÜ Esports is an Argentine organization focused on the esports and content creation scenes with the goal of bringing this world to a wider audience with the support of Sergio Agüero as founder and helping with the connection between the traditional and virtual sports scene.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 1,
            "logo" => "https://cdn.shopify.com/s/files/1/1516/5886/files/NIP-Symbol-RGB-Black_65f83867-93c0-488d-bbaf-aea6c127af0e_400x.png?v=1613771259",
            "name" => "Ninjas in Pyjamas" ,
            "description" => "Ninjas in Pyjamas (often abbreviated to NIP and previously NiP) is a Swedish esports organization which was founded in 2000. The team competed in Counter-Strike until their dissolution in 2007. In 2012, the team returned with a now heavily renowned Counter-Strike: Global Offensive squad and have branched out in a large variety of games.",
            "history" => "Ninjas in Pyjamas entered Valorant in the closed beta with the signing of their former European Paladins World Championship winning roster. The roster shortly fell apart after a total of two months, with the organization opting to rebuild entirely with rhyme.",
        ]) ;


        //tournament 2
        Team::create([
            "tournament_id" => 2,
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/100_Thieves_logo.svg/1200px-100_Thieves_logo.svg.png",
            "name" => "100 Thieves" ,
            "description" => "100 Thieves is an American organization formed by former OpTic Gaming Call of Duty player, co-owner and personality, Matthew 'Nadeshot' Haag and NBA team Cleveland Cavaliers.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 2,
            "logo" => "https://static.gosugamers.net/32/03/2d/8d4118b797d96c870613f163de4b89360f64145a1b44ea98623ea85c0c.png?w=150&dpr=3",
            "name" => "Cloud9" ,
            "description" => "Cloud9 is a North American esports organization currently fielding a North American team and also previously a South Korean team in VALORANT. They also feature players and teams in Counter Strike:Global Offensive, Hearthstone, Halo, League of Legends, Super Smash Bros. Melee, Fortnite, and Wild Rift. Additonally, Cloud9 manage the London Spitfire spot in the Overwatch League.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 2,
            "logo" => "https://cdn0.gamesports.net/edb_team_sub_logos/0/16.png?1610637237",
            "name" => "Evil Geniuses" ,
            "description" => "Evil Geniuses (often abbreviated as EG) is a professional gaming organization founded in Canada in 1999.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 2,
            "logo" => "https://upload.wikimedia.org/wikipedia/en/thumb/a/ad/FURIA_Esports_logo.svg/1200px-FURIA_Esports_logo.svg.png",
            "name" => "FURIA Esports" ,
            "description" => "FURIA Esports is a Brazilian esports organization founded in August 2017.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 2,
            "logo" => "https://upload.wikimedia.org/wikipedia/tr/1/17/KR%C3%9C_Esports_logo.png",
            "name" => "KRÜ" ,
            "description" => "KRÜ Esports is an Argentine organization focused on the esports and content creation scenes with the goal of bringing this world to a wider audience with the support of Sergio Agüero as founder and helping with the connection between the traditional and virtual sports scene.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 2,
            "logo" => "https://upload.wikimedia.org/wikipedia/tr/e/e4/Leviat%C3%A1n_logo.png",
            "name" => "Leviatán" ,
            "description" => "Leviatán (formerly stylized as Leviatán Esports) is an Argentinian esports organization founded in 2020.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 2,
            "logo" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/LOUD_logo.svg/640px-LOUD_logo.svg.png",
            "name" => "LOUD" ,
            "description" => "LOUD is a Brazilian multi-gaming organization.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 2,
            "logo" => "https://mb.cision.com/Public/16839/3053270/b8bac933fea1ae80_org.png",
            "name" => "MIBR" ,
            "description" => "MIBR (also known as Made in Brazil) is a Brazilian professional esports organization owned by Immortals Gaming Club.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 2,
            "logo" => "https://static.wikia.nocookie.net/valorant_esports_gamepedia_en/images/f/fd/NRG_Esportslogo_square.png",
            "name" => "NRG" ,
            "description" => "NRG (previously known as NRG Esports) is an American esports organization, formed after co-owners of the NBA's Sacramento Kings purchased the LCS spot of Team Coast's League of Legends team. They currently have teams in Rocket League, Apex Legends, Fortnite, and manage the San Francisco Shock in the Overwatch League.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 2,
            "logo" => "https://upload.wikimedia.org/wikipedia/en/thumb/2/24/Sentinels_Logo.svg/1200px-Sentinels_Logo.svg.png",
            "name" => "Sentinels" ,
            "description" => "Sentinels is an American esports organization based in Los Angeles. [1]",
            "history" => "",
        ]) ;


        //league of legends teams
        //tournament 1
        Team::create([
            "tournament_id" => 3,
            "logo" => "https://upload.wikimedia.org/wikipedia/en/6/66/Bilibili_Gaming_logo_%282021%29.png",
            "name" => "Bilibili" ,
            "description" => "Bilibili Gaming is an Chinese team owned by Bilibili.com.",
            "history" => "",
        ]) ;

        Team::create([
            "tournament_id" => 3,
            "logo" => "https://static.wixstatic.com/media/0f6088_4c76444eed4842e3985459e8feb55595~mv2.png/v1/crop/x_0,y_0,w_2500,h_1229/fill/w_616,h_308,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/LOGOR7_AJUSTE2022_Mesa%20de%20trabajo%201.png",
            "name" => "Rainbow7" ,
            "description" => "Rainbow7 is a Mexican esports organization, founded by Karzek, FraGio and Nikez.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 3,
            "logo" => "https://cdn.shopify.com/s/files/1/0548/8554/8183/files/G2-Esports-2020-Logo_87bf0678-e67f-4834-8b09-e56137ffaa80.png?v=1641913940",
            "name" => "G2 Esports" ,
            "description" => "G2 Esports (formerly known as Gamers2) is a German professional esports organization located in Berlin, and founded in November 2013 by Carlos 'ocelote' Rodriguez.",
            "history" => "",
        ]) ;

        Team::create([
            "tournament_id" => 3,
            "logo" => "https://upload.wikimedia.org/wikipedia/en/thumb/7/77/Gen.G_Logo.svg/1200px-Gen.G_Logo.svg.png",
            "name" => "Gen.G Esports" ,
            "description" => "Gen.G Esports, occasionally abbreviated as Gen.G, (formerly known as KSV eSports) is a professional global esports organization. They were ranked #6 in the 2020 Forbes list of the world’s most valuable esports companies. [1]",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 3,
            "logo" => "https://seeklogo.com/images/S/sk-telecom-t1-logo-DC64F0F23D-seeklogo.com.png",
            "name" => "T1" ,
            "description" => "T1 is a Korean esports team operated by T1 Entertainment & Sports, a joint venture between SK Telecom and Comcast Spectacor, formed out of SK Telecom T1 K and SK Telecom T1 S. They were previously known as SK Telecom T1.",
            "history" => "SK Telecom T1 made their debut at IEM Cologne in 2012, with Reapered, H0R0, MighTiLy, UandME and StarLast securing the title for the Korean team with a 2-1 victory against Fnatic. This team would then split up into SK Telecom T1 K and SK Telecom T1 S, before the teams merged ahead of 2015 to form a line-up of MaRin, Bengi, T0M, Faker, Easyhoon, Bang, Wolf and Piccaboo. This team looked like a top challenger right away, winning the LCK 2015 Spring Split, before placing 2nd at MSI 2015. After their LCK 2015 Summer Split championship, SKT won their first World Championship, beating countrymates KOO Tigers 3-1 in the finals.",
        ]) ;
        Team::create([
            "tournament_id" => 3,
            "logo" => "https://static.gosugamers.net/32/03/2d/8d4118b797d96c870613f163de4b89360f64145a1b44ea98623ea85c0c.png?w=150&dpr=3",
            "name" => "Cloud9" ,
            "description" => "Cloud9 is a North American esports organization currently fielding a North American team and also previously a South Korean team in VALORANT. They also feature players and teams in Counter Strike:Global Offensive, Hearthstone, Halo, League of Legends, Super Smash Bros. Melee, Fortnite, and Wild Rift. Additonally, Cloud9 manage the London Spitfire spot in the Overwatch League.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 3,
            "logo" => "https://upload.wikimedia.org/wikipedia/en/7/7d/JD_Gaming_logo.png",
            "name" => "JD Gaming" ,
            "description" => "JD Gaming is a Chinese esports organisation based in Beijing. The team was created on May 20th 2017 after JD.com acquired the LPL spot of the QG Reapers.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 3,
            "logo" => "https://upload.wikimedia.org/wikipedia/en/8/84/MAD_Lions_logo.svg",
            "name" => "MAD Lions" ,
            "description" => "MAD Lions is a Spanish team formed in 2017 by Jorge Schnura and Marcos Eguillor. It was acquired by OverActive Media in 2019 and joined the LEC to replace Splyce in 2020. Alongside the main roster, MAD Lions also fielded an academy, Colombian and Mexican team.",
            "history" => "MAD Lions debuted in the LEC with a roster consisting of Orome, Shad0w, Humanoid, Carzzy and Kaiser. Despite early expectations being low in the community with a roster of several rookies, MAD Lions placed 3rd in the 2020 Spring Season, with a 4th place in the 2020 Summer Season securing them a direct invite to the Worlds 2020 play-ins. At Worlds, MAD Lions failed to make it through the play-ins stage, only beating INTZ twice to make it through to the second play-in round, where SuperMassive Esports beat them ",
        ]) ;
        Team::create([
            "tournament_id" => 3,
            "logo" => "https://upload.wikimedia.org/wikipedia/en/thumb/1/1a/Goldenguardians_logo.svg/1200px-Goldenguardians_logo.svg.png",
            "name" => "Golden Guardians" ,
            "description" => "Golden Guardians is an American esports organization founded by NBA team Golden State Warriors.",
            "history" => "Golden Guardians is a franchised NA LCS organization, created by the Golden State Warriors. After placing 10th twice in their debut year, the team restructured and has gone on a stable climb to make playoffs 7 times since then. In December 2019, the team rebranded, removed the blue from their branding and changed their logo to the one we know today.",
        ]) ;
        Team::create([
            "tournament_id" => 3,
            "logo" => "https://upload.wikimedia.org/wikipedia/en/thumb/2/25/PSG_Talon_logo.png/220px-PSG_Talon_logo.png",
            "name" => "PSG Talon" ,
            "description" => "PSG Talon (formerly Talon Esports) is a professional esports organization in partnership with Paris Saint-Germain eSports.",
            "history" => "In 2019, Talon Esports was announced as one of the 10 teams participating in the PCS. Their roster was announced in 2020, consisting of Hanabi, River, Candy, Unified and Kaiwing. They won their debut season, with a 3-2 victory against Machi Esports in the Spring finals. Unfortunately, MSI 2020 was cancelled, which meant no full international debut for the team. Despite this, they faced the Vietnamese teams at the Mid Season Showdown and won the title by beating Team Flash 3-1 in the finals. Ahead of the Summer Season, they partnered with Paris Saint-Germain eSports to rebrand to PSG Talon. In this split, they placed second following a 0-3 defeat against Machi Esports. At Worlds 2020, PSG Talon placed 9-12th following a 2/-/4 record in their group.",
        ]) ;

        Team::create([
            "tournament_id" => 4,
            "logo" => "https://am-a.akamaihd.net/image?resize=200:&f=http%3A%2F%2Fstatic.lolesports.com%2Fteams%2F1673830053328_Geekay_Esports-logo.png",
            "name" => "Geekay Esports" ,
            "description" => "Geekay Esports is an Emirati esports organization.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 4,
            "logo" => "https://am-a.akamaihd.net/image?resize=200:&f=http%3A%2F%2Fstatic.lolesports.com%2Fteams%2F1676278903430_FullcolorTransparent1.png",
            "name" => "RAAD" ,
            "description" => "Team RA'AD is an Egyptian organization.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 4,
            "logo" => "https://am-a.akamaihd.net/image?resize=200:&f=http%3A%2F%2Fstatic.lolesports.com%2Fteams%2F1673826964651_DDD-LOGO-PNG.png",
            "name" => "Triple Esports" ,
            "description" => "Triple Esports is a Saudi Arabian esports organization.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 4,
            "logo" => "https://d3075koojqalel.cloudfront.net/team/logo/20230307105534_79953.png",
            "name" => "3BL Esports" ,
            "description" => "3BL Esports is an Egyptian organization.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 4,
            "logo" => "https://www.anubisgaming.com/content/uploads/2022/11/main-home-logo-2.png",
            "name" => "Anubis Gaming" ,
            "description" => "Anubis Gaming is an Egyptian esports organization.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 4,
            "logo" => "https://fxgesports.com/img/sponsors/fxg.png",
            "name" => "Fox Gaming" ,
            "description" => "Fox Gaming is a Moroccan esports organization founded in May 2020.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 4,
            "logo" => "https://nigmagalaxy.com/wp-content/uploads/2022/08/Logo_mark.svg",
            "name" => "Nigma Galaxy" ,
            "description" => "Nigma Galaxy is the MENA roster of Galaxy Racer Esports and Team Nigma, an Emirati esports organization. On September 20th, 2021 Galaxy Racer merged with Team Nigma to create Nigma Galaxy.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 4,
            "logo" => "https://cdn.thespike.gg/Teams%252010%2FGnGEsports_1674476507157.png",
            "name" => "GnG Esports" ,
            "description" => "GnG Esports (also known as Gamers and Geeks) is a Tunisian esports organization.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 5,
            "logo" => "https://dxbhsrqyrr690.cloudfront.net/sidearm.nextgen.sites/ccis.sidearmsports.com/images/logos/site/site.png",
            "name" => "Columbia College" ,
            "description" => "Columbia College is a private college in Columbia, Missouri, USA, currently hosting a collegiate Rocket League team.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 5,
            "logo" => "https://esports.northwood.edu/wp-content/uploads/2021/04/esports_logo.png",
            "name" => "Northwood Blue" ,
            "description" => "Northwood Blue, formerly known as Northwood University and often referred to as Northwood Blue, is one of the collegiate Rocket League teams of private university Northwood University, located in Midland, Michigan, USA.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 5,
            "logo" => "https://static.wikia.nocookie.net/cod_esports_gamepedia_en/images/9/99/Fisher_Collegelogo_square.png",
            "name" => "Fisher College" ,
            "description" => "Fisher College is a private college in Boston, Massachusetts, USA, currently hosting a collegiate Rocket League team.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 5,
            "logo" => "https://esports.northwood.edu/wp-content/uploads/2021/04/esports_logo.png",
            "name" => "Northwood White" ,
            "description" => "Northwood University White, often referred to as Northwood White, is one of the collegiate Rocket League teams of private university Northwood University, located in Midland, Michigan, USA.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 5,
            "logo" => "https://stockton.edu/relations/brand-guide/images/s-symbol-correct-2.png",
            "name" => "Stockton University" ,
            "description" => "Stockton University, also known as Stockton, is a public university in Galloway Township, New Jersey, USA, currently hosting a collegiate Rocket League team.",
            "history" => "",
        ]) ;
        Team::create([
            "tournament_id" => 5,
            "logo" => "https://cdn.escharts.com/uploads/public/60f/70c/736/60f70c73653ed557872816.png",
            "name" => "Berlin Phoenix" ,
            "description" => "Berlin Phoenix is one of the collegiate Rocket League teams of public research university Technical University of Berlin, located in Berlin,",
            "history" => "",
        ]) ;
//        Team::create([
//            "tournament_id" => 5,
//            "logo" => "",
//            "name" => "" ,
//            "description" => "",
//            "history" => "",
//        ]) ;
//        Team::create([
//            "tournament_id" => 5,
//            "logo" => "",
//            "name" => "" ,
//            "description" => "",
//            "history" => "",
//        ]) ;
//        Team::create([
//            "tournament_id" => 3,
//            "logo" => "",
//            "name" => "" ,
//            "description" => "",
//            "history" => "",
//        ]) ;
    }
}
