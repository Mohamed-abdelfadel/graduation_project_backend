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
            "id"=>100,
            "image" => "https://owcdn.net/img/60ad86ef89420.jpg",
            "title" => "penny: 'It was definitely a mental battle between the two teams'" ,
            "tournament_id" => 1,
            "description" => "after taking down Crazy Raccoon 2-0 in their opening match, with both maps going down to the wire, Version1 felt even more prepared to take on the bigger fish in the pond. In the 'game of nerves' that is Version1's first LAN event, that series proved crucial in propelling the North American squad in their match against Team Liquid.
'I definitely think that us playing that playing that [Crazy Raccoon] match is probably a decent amount of the reason why we beat Liquid,' vanity said. 'I think that we shed a lot more nerves in the first match than in the second one.'
With players visible to each other across the venue, and with hundreds of thousands of dollars on the line, alongside the pride of your continent, both teams were at edge. Emotions are high, adrenaline is seen everywhere, and yelling at your enemies across the room is something both teams cherish.
'It was definitely a mental battle between the two teams because even if the stream didn't show it, we were both yelling at each other the whole game, like yelling back and forth,' penny said. 'When stuff would go wrong for them, we make sure they know what they did wrong. And they do the same for us.'
The mental battle was one of the reasons Version1 believes they won out over Liquid tactically. Nowhere was this more noticeable than on Haven, the final map of the series. 'We full-eco'd them after losing the pistol round on a third map and I think that really got to them,' penny noted. 'We just kept the momentum going and they couldn't actually stop us.'
Later on the map, vanity flexed his mental game prowess further against Dom 'soulcas' Sulcas on Ascent, flicking against the British Skye behind him. After that flickshot, vanity did what he did best.",
            "author" => "VALORANT Champions Masters - Reykjavík",
        ]) ;

        Tournament_news::create([
            "image" => "https://owcdn.net/img/60b14b63c499d.jpg",
            "title" => "Fnatic eliminate Version1 from Master" ,
            "tournament_id" => 1,
            "description" => "VALORANT Masters: Reykjavik continued today, with only six teams left vying for the championship title. Day five of the tournament began in the lower bracket, where two more teams would face elimination.
The first of those elimination matches was a clash between FNATIC and Version1. Just yesterday, Fnatic survived a bout with X10 Esports to stay alive in the lower bracket, while Version1 had been knocked down after an incredibly close three-map series against NUTURN.
Both teams were runner-ups in Challengers in their respective regions, but it was clear to both of them that by the end of the day, the runner-up of this match would not be moving on in Iceland.
The series began on Icebox, where the first half of the map was a pendulum of momentum. Fnatic won the first four rounds after a pistol round win, followed by Version1 racking wins of their own. After 12 rounds, both teams were tied.
One particular play in the half was on Round 9. The action got started when Loic 'effys' Sauvageau and Nikita 'Derke' Sirmitev were traded out as Fnatic had people pushing through mid. Meanwhile, Martin 'MAGNUM' Penkov was able to kill Anthony 'vanity' Malaspina on A site.
Erik 'penny' Penny sat on A Rafters with Jett and peeked onto main with his Operator. He aimed his scope at James 'Mistic' Orfila and Domagoj 'doma' Fancev, pulling his trigger onto Mistic's Viper, but managed to catch doma in the collateral, even when the two didn't appear to be lined up for him.",
            "author" => "VALORANT Champions Masters - Reykjavík",
        ]) ;

        Tournament_news::create([
            "image" => "https://owcdn.net/img/60b29b0ea5496.jpg" ,
            "title" => "Fnatic survive elimination against Liquid" ,
            "tournament_id" => 1,
            "description" => "Yesterday, Fnatic stunned Version1 in a 2-0 match, with Nikita 'Derke' Sirmitev putting on a show. Liquid completed the top four as they themselves swept Team Vikings, Brazil's first seed. As the day came to a close, Dom 'soulcas' Sulcas revealed he was “super pumped for this game”, setting the stage for the EMEA Challengers Playoffs' grand final rematch.
Fnatic looked pristine on the opening Bind map, as is expected of them. The team has solidified Bind as their home turf — they haven't lost a single one out of ten played since the additions of Derke and Martin 'MAGNUM' Penkov. They took themselves to 6-1 as MAGNUM and Jake 'Boaster' Howlett kept on opening sites, combining for six first bloods.
At that point Connor 'Sliggy' Blomfield stepped in to have a few words with his team. It paid off as they recovered to 6-3, but then it was Fnatic's turn to request a timeout and hear from Jacob 'Mini' Harris. Liquid managed to close the lead their opponents held, but Fnatic still held on to the half 7-5.
Switching sides, Liquid won the pistol and their deserved second round, but when the Phantoms and Vandals came out Fnatic looked solid as they climbed to map point. The energy fueling the team's five round charge started to show on Boaster's player cam by their second consecutive round win; three rounds and eight kills later, Boaster stood up and let the entire stage know how he was feeling.",
            "author" => "VALORANT Champions Masters - Reykjavík",
        ]) ;
        Tournament_news::create([
            "image" => "https://owcdn.net/img/60b4430fce711.jpg" ,
            "title" => "dapr: 'This is the top. We did this. We're the top.'" ,
            "tournament_id" => 1,
            "description" => "'It worked out exactly how we expected,' Jared 'zombs' Gitlin said.
The 'expected' he was referring to was Sentinels' 3-0 victory over FNATIC in the grand finals to complete their undefeated run through Masters Reykjavik.
But a 3-0 match is not the same as a blowout match. The first two maps went into overtime. The last map was 13-11.
In fact, across the Sentinels' five maps played against Fnatic this week, four maps finished with the bare minimum two-round differential. Sentinels won the other map by just three rounds. The two other teams Sentinels played in Iceland couldn't get any closer to Sentinels than six rounds.
It's not like either team didn't try to blow the other out. Sentinels jumped up to a 10-5 lead on the first map, Split, before Fnatic brought it back with six straight round wins. Fnatic started the second map, Bind, with a 9-4 lead but Sentinels put them on their back foot by winning eight of the next nine rounds. Sentinels started Haven with a 9-3 lead, but Fnatic started the second half with six straight round wins to tie it.
Sentinels victory on Split was boosted by zombs' best map of the tournament, leading his team in damage with more than 172 per round and finishing second in ACS with 259. His ability to anchor sites was displayed best when he used his Astra pull on the other side of a Cypher cage to kill two through a smoke en route to a Spectre 4K.",
            "author" => "VALORANT Champions Masters - Reykjavík",
        ]) ;
        Tournament_news::create([
            "image" => "https://owcdn.net/img/64078192a1a2a.jpg" ,
            "title" => "VCT Americas League dates and format revealed" ,
            "tournament_id" => 2,
            "description" => "In terms of format, the VCT Americas will follow in the footsteps of the VCT EMEA. The ten partnered teams will play a single round-robin format during the regular season, each playing one Bo3 per week. This means that there will be five matches per week, while a mid-April superweek will see each team play two matches.
The regular season will play out between April 1 and May 20. Matches will be played between Saturday and Monday from 12 p.m. PT, with weekends hosting two matches a day and Monday being a single-match day. The six-best teams will move to the playoffs.
There will be just three days of rest between the season and the playoffs, which begin on May 23 and last until May 28. This final stage will be played out in a six-team double-elimination bracket, drafting the top three teams into Masters Tokyo as well as into VCT Champions.
Riot has also put forth the dates for the Last Chance Qualifier, which will be played between July 15 and 23.
The Riot Games Arena, formerly the LCS Studio, will be the stage for every VCT Americas League match. Fans will be able to follow the entire league live, with tickets for the first four weeks already up for sale. Full details regarding other weeks can be found in the official announcement.
Sentinels and 100 Thieves will play the league's opening match on April 1, with KRÜ Esports and FURIA taking the stage shortly after. The full schedule can be found here.
Today's announcement also gave a peak revealed the Americas' Ascension tournament, which will promote one team to the VCT League by 2024, will be a six-team tournament. The top two teams from NA, top two from Brazil, as well as one from LATAM North and one from LATAM South will qualify to Ascension this year. This tournament's exact format is currently unknown.",
            "author" => "VALORANT Champions Americas League",
        ]) ;
        Tournament_news::create([
            "image" => "https://owcdn.net/img/64696ff017489.jpg" ,
            "title" => "100 Thieves and Sentinels miss playoffs after VCT Americas Week 8" ,
            "tournament_id" => 2,
            "description" => "FURIA vs. Sentinels proved to be one of the most entertaining and high stakes matches of VCT Americas yet.
The first map of the series went to Sentinels' map choice of Split, where Sentinels coasted to a dominant 9-3 first half advantage. FURIA only managed to take one gun round in the entirety of their defense. The Brazilian team showed signs of life by taking the pistol and anti-eco rounds for the second time on the map, but Sentinels quickly reached double-digits by winning the bonus round and gaining a 10-5 advantage.
On round 16, FURIA needed a miracle to keep their heads in the game after making the vital mistake of leaving the spike near spawn with 30 seconds on the clock. That miracle came in the form of dgzin, who secured an unbelievable ace on site with two slick headshots onto Marved and zekken to win FURIA the round. Despite dgzin's heroics, FURIA soon lost the map to Sentinels 13-7.
FURIA proved to be even more dominant on their map pick, Haven, than Sentinels were on their own map pick of Split. While Sentinels started off the map by winning the pistol and anti-eco rounds, FURIA got the ball rolling on the bonus round with a 1v2 win by mwzera and ended the half 8-4.
The Brazilian team took the first four rounds of the second half of the map to reach map point 12-4. Sentinels managed to get one more round win with a 3K by Sacy before FURIA took the game 13-5 on round 18.
With an absurd 12 total rounds of overtime, the matchup of FURIA vs. Sentinels on Bind was one of the most memorable in this split of VCT Americas. Bind was truly neutral ground, as both teams had previously played on the map this split only once each.
mwzera clutched a 1v3 to begin the map in favor of FURIA. TenZ won the 1v1 in the bonus round for Sentinels, who quickly tied the map up 2-2. After trading control of the map, the first half ended evenly 6-6.",
            "author" => "VALORANT Champions Americas League",
        ]) ;
        Tournament_news::create([
            "image" => "https://owcdn.net/img/646d8ded46ae4.jpg" ,
            "title" => "Double upsets start VCT Americas playoffs" ,
            "tournament_id" => 2,
            "description" => "The first day of the VCT Americas Playoffs went the distance with two upsets and the longest overtime on record this season. FURIA and Evil Geniuses move on in the upper bracket while Leviatán and NRG Esports have dropped down to the lower bracket.
This is how it went down
Leviatán vs. FURIA
The fourth and fifth-seeded teams Leviatán and FURIA faced off against each other in the first game of the day. Both teams had lost four out of five of their previous matches and were looking to regain their confidence in the playoffs.
The first map of the day went to FURIA's map pick of Ascent, where Leviatán were 0-4 during the regular season. Leviatán's discomfort on the map quickly became evident. They lost their defender's side pistol round and ended the first half down 8-4.
The second half of the map was FURIA's playground. The Brazilian team carried out a nearly perfect defender's side, dropping only one round to Leviatán as a result of an early two-player deficit from their signature overaggression. On the final round, dgzin drew first blood and executed a 3K to finish Ascent 13-5 for his team.
Leviatán hoped to take the match all the way to the end with a win on Pearl, their 5-0 map. Unfortunately for the LATAM team, they began their best map at a 4-0 disadvantage to another pistol round win by FURIA. Leviatán lost two 3v1s to Mazin and Khalil respectively to end the half in yet another 8-4 scenario.
But Leviatán would come back with something to prove for the second half of the map. The LATAM team won the pistol round for the first time in the series. After dropping two quick rounds to FURIA, they initiated the comeback with six rounds in a row. Their map win looked inevitable on round 24 as they drew first blood and planted the spike on B site in a 5v4 scenario. But FURIA adapted and took the fight to Leviatán, and mazin stuck the spike through enemy fire to secure FURIA a miracle round and a chance in overtime.
Little did FURIA know, they were in for the long haul. Leviatán won the first round to get themselves to map point for the second time, but FURIA refused to lose. Khalil took the 1v1 to save the series for his team. With Leviatán in the lead, the South American teams traded defense round wins all the way to round 31, when Khalil came alive again with a 2K on the Shorty to clutch the 1v2 a second before the defuse.",
            "author" => "VALORANT Champions Americas League",
        ]) ;
        Tournament_news::create([
            "image" => "https://owcdn.net/img/646eae2426db4.jpg" ,
            "title" => "LOUD and Evil Geniuses claim first Tokyo slots from Americas" ,
            "tournament_id" => 2,
            "description" => "Much to the pleasure of fans, FURIA's win over Leviatán yesterday guaranteed Brazil a spot at Tokyo. LOUD, however, were hungry to earn another international appearance and made quick work of their opponents.
After claiming Haven's first pistol and bolstering their economy by winning the next four rounds, LOUD sat at a comfortable 5-0 scoreline before FURIA answered back with two rounds of their own. Unfortunately, little could be done against the monstrous stats put up by Less in the first half alone; the talent ended Haven's attacking half with a 1.59 rating and 3.0 K/D ratio.
Despite a valiant effort following the second pistol (which went the way of LOUD), FURIA were only able to claim one more round in the second half before their opponents won the next three to close out the map 13-4. Less and cauanzin put up amazing performances, with the latter claiming five first kills on Skye and stealing the show away from aspas, who was unusually quiet on Haven.
With a second chance on Ascent, the star duelist stepped things up and put up yet another amazing performance with flashy plays and clutches. After FURIA took the first two rounds of the map and threatened to take the bonus, aspas stole the round away with a 1v2 ace clutch, allowing LOUD to begin snowballing away with the lead.
With the momentum in their favor, LOUD began taking round after round, often overwhelming FURIA to the point of saving guns consecutive rounds in a row. A poor performance from dgzin, who ended the first half with a single kill, did little to even the odds. Even after taking their second pistol of the map, FURIA were once again unable to win any more rounds after LOUD had built up a sizable economy. With all the confidence on the world ",
        "author" => "VALORANT Champions Americas League",
        ]) ;

        Tournament_news::create([
            "image" => "https://images.contentstack.io/v3/assets/bltad9188aa9a70543a/blt0476420d7e9bfda2/63dc2c7e4cd3b46624f763d8/MSI23_Announcement_Header.png" ,
            "title" => "Save-the-Date: MSI 2023 is Coming to London!" ,
            "tournament_id" => 3,
            "description" => "The League of Legends Mid-Season Invitational is coming to London! From May 2-21, 13 qualified teams from around the world will take to the global stage for the first time this year at Copper Box Arena, a key venue for esports located in Queen Elizabeth Olympic Park.
MSI 2023 Theme and Format DEF
Defy expectations. Defy haters. Defy doubts. MSI is all about showcasing regional strength midway through the season. It’s the first step toward greatness, pushing beyond limits and showing up with a spirit of defiance.
This year, MSI will feature two double-elimination stages; the Play-In Stage and the Bracket Stage, giving regions more opportunity to defy all odds. If you’re not familiar with the changes, head over to the LoL Esports State of the Game article we released in January. Join us in person at the Copper Box Arena or tune in live on lolesports.com to cheer on your favorite region!
Ticket Sales
Tickets officially go on sale at 2 am PST/10 am GMT February 23! Prices range from £29-£94. Visit http://axs.com/lolmsi2023 to learn more.
The Play-In Stage will be May 2-7
The Bracket Stage will be May 9-14 and May 16-20
The Final will be May 21",
            "author" => "League of legends MSI 2023",
        ]) ;
        Tournament_news::create([
            "image" => "https://images.contentstack.io/v3/assets/bltad9188aa9a70543a/blt3882079e3f329415/63d39a3399f0c910e1719951/LEC_Winter_2023.jpg" ,
            "title" => "Here are the records to beat for the LEC Winter Split!" ,
            "tournament_id" => 3,
            "description" => "This past weekend, we stepped into a new era of the LEC. EU has become EMEA, complete with an all-new format and a few fresh faces – including our new competitor Team Heretics, and the newly-rebranded KOI. But at our heart we’re still the same LEC that we’ve always been, and what would the LEC be if we didn’t take a second to look back at our legacy?
Throughout our ten years of compelling competitive play, from the early days of the EU LCS to the current pillar of EMEA esports that is the LEC, we’ve seen some incredible players step up to the plate to write their names in the League of Legends history books. Records have been made, and broken, time and time again as metas develop and players come and go.
Just one weekend in, our players have already laid some strong claims to a spot in those history books. While Team Vitality and G2 Esports set themselves apart, refusing to drop even a single game, we’ve got a messy brawl in the middle of the standings as teams look to assign a pecking order after a long and turbulent offseason.
We saw rookies rise (shoutout to G2 Esports’ Yike, who currently has the highest total kills of any player in the league over their first three days playing on the LEC stage). And we saw veterans stumble, as new synergies and old rivalries led to some shaky showings from former superstars.
With the opening weekend of our LEC Winter Split now behind us, we wanted to take a look back into the misty depths of time at some of the LEC’s longest-standing records. It’ll take a whole lot of skill (and maybe just a little bit of luck), but there’s no better way for our teams to cement themselves as the region’s best by breaking one of our long-standing records.",
            "author" => "League of legends MSI 2023",
        ]) ;
        Tournament_news::create([
            "image" => "https://pbs.twimg.com/media/FuOcmcFWYAI_aVm?format=jpg" ,
            "title" => "" ,
            "tournament_id" => 4,
            "description" => "Registration for the League of Legends Playground Championship is open for its first season this year in the Middle East and Africa region!",
            "author" => "",
        ]) ;
        Tournament_news::create([
            "image" => "https://pbs.twimg.com/media/FuaSysVWwAQs1cF?format=jpg" ,
            "title" => "" ,
            "tournament_id" => 4,
            "description" => "here are only three days left until registration for the League of Legends Playground Tournament closes!",
            "author" => "",
        ]) ;
        Tournament_news::create([
            "image" => "https://pbs.twimg.com/media/Fu0ekK_WwAI7z2Z?format=jpg" ,
            "title" => "" ,
            "tournament_id" => 4,
            "description" => "For the first time, watch the entire MSI tournament in Arabic with the streamer Dattura6 ! All you have to do is head over to his Twitch channel and catch up on all the exciting matches!",
            "author" => "",
        ]) ;
        Tournament_news::create([
            "image" => "https://pbs.twimg.com/media/Fs3xLa6WIAAFeML?format=jpg" ,
            "title" => "" ,
            "tournament_id" => 4,
            "description" => "The friendly match that brings together influencers and streamers in Turkey and the MENA region has now started!",
            "author" => "",
        ]) ;
//        Tournament_news::create([
//            "image" => "" ,
//            "title" => "" ,
//            "tournament_id" => 1,
//            "description" => "",
//            "author" => "",
//        ]) ;

    }
}
