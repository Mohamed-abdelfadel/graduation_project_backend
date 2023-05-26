<?php

namespace App\Http\Controllers;
use App\Models\Duel;
use App\Models\team;
use Illuminate\Http\Request;
class TeamController extends Controller
{

    public function index()
    {
        $teams = Team::query()->select('id' , 'logo' , 'name' , 'description')->get() ;
        return $teams ;
    }


    public function players($id)
    {
        $team = Team::query()->with('players')->find($id) ;
        return response($team);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function top_teams($id){
        $top_team = Team::query()->select("id","logo","name")->where("tournament_id" , "=","$id")->limit(3)->get() ;
        return response($top_team);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(team $team)
    {
        //
    }
    public  function update_result(Request $request , $id){
        $match = Duel::query()->findOrFail($id);
        $match->team1_score = $request->input('team1_score');
        $match->team2_score = $request->input('team2_score');
        $match->save();

    }

    public function result(Request $request, $id = null){

        if ($id ) {
            $match = Duel::query()->findOrFail($id);
            if (!($match->status_id == 1)){
                $match->status_id = 1;
                $match->team1_score = $request->input('team1_score');
                $match->team2_score = $request->input('team2_score');
                $match->save();
                if ($match->team1_score > $match->team2_score) {
                    $winning_team = $match->team1;
                    $losing_team = $match->team2;
                } else {
                    $winning_team = $match->team2;
                    $losing_team = $match->team1;
                }
                $winning_team->wins += 1;
                $winning_team->matches_played += 1;
                $winning_team->save();

                $losing_team->loses += 1;
                $losing_team->matches_played += 1;
                $losing_team->save();

                return response("Match result terminated successfully");
            }
            else{
                return response("this match isn't live");
            }
        }
        else {
            // Update all matches with status_id = 1
            $matches = Duel::where('status_id', 1)->get();
            foreach ($matches as $match) {
                if ($match->team1_score > $match->team2_score) {
                    $winning_team = $match->team1;
                    $losing_team = $match->team2;
                } else {
                    $winning_team = $match->team2;
                    $losing_team = $match->team1;
                }
                $winning_team->wins += 1;
                $winning_team->matches_played += 1;
                $winning_team->save();

                $losing_team->loses += 1;
                $losing_team->matches_played += 1;
                $losing_team->save();
            }
            return response("Match results terminated successfully for all matches with status_id = 1");
        }
    }

}
