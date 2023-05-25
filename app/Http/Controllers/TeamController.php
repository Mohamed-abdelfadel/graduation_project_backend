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

    public function result($id){
        $match = Duel::query()->findOrFail($id);
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
        return response("match result terminated successfully");
    }

}
