<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\team;
use App\Models\Tournament;
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
        $team = Team::query()->with('player')->find($id) ;
        $data = array();
        foreach ($team->player as $player){
            $data[]=["id"=> $player->id ,"name"=> $player->name ,"logo"=> $player->image];
        }

        return $data ;
    }

//    public function tournaments($id){
//        $tournaments = Tournament::query()->with('team')->get() ;
//        $teams = Team::query()->with("player")->get();
//        $teams_data = array();
//        foreach ($teams as $team){
//            $teams_data[]=[
//                "id"=> $team->id ,
//                "team"=> ["players" => $team->player,],
//            ];
//        }
//        foreach ($tournaments as $tournament){
//            $tournament_data[]=[
//                "id"=> $team->id ,
//                "team"=>  $tournament->team,
//            ];
//        }
//        return response($tournament_data) ;
//    }
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
