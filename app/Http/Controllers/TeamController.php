<?php

namespace App\Http\Controllers;
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
}
