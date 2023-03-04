<?php

namespace App\Http\Controllers;

use App\Models\Duel;
use Illuminate\Http\Request;

class DuelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Duel::query()->orderBy('starting_date' , 'desc')->get();
        $matches_data = array();
        foreach ($matches as $match){
            $matches_data[]=[
                "id"=> $match->id ,
                "playoff"=> $match->playoff->name,
                "team1"=> [
                    "id" => $match->team1->id,
                    "name" => $match->team1->name,
                    "logo" => $match->team1->logo,
                    "score" => $match->team1_score,
                ],
                "team2"=> [
                    "id" => $match->team1->id,
                    "name" => $match->team2->name,
                    "logo" => $match->team2->logo,
                    "score" => $match->team2_score,
                ],
                "tournament"=> $match->tournament->name,
                "live_status"=> $match->live_status,
                "starting_data" =>  $match->starting_date
            ];
        }
            return response($matches_data) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tournament($id){
        $matches = Duel::query()->where("tournament_id" , "=" , "$id")->orderBy('starting_date' , 'desc')->get();
        $matches_data = array();
        foreach ($matches as $match){
            $matches_data[]=[
                "id"=> $match->id ,
                "playoff"=> $match->playoff->name,
                "team1"=> [
                    "id" => $match->team1->id,
                    "name" => $match->team1->name,
                    "logo" => $match->team1->logo,
                    "score" => $match->team1_score,
                ],
                "team2"=> [
                    "id" => $match->team1->id,
                    "name" => $match->team2->name,
                    "logo" => $match->team2->logo,
                    "score" => $match->team2_score,
                ],
                "tournament"=> $match->tournament->name,
                "live_status"=> $match->live_status,
                "starting_data" =>  $match->starting_date
            ];
        }
        return response($matches_data) ;
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
