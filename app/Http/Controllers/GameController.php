<?php

namespace App\Http\Controllers;

use App\Models\Duel;
use App\Models\Game;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Game_news;
use App\Models\news;
use Carbon\Carbon;

class GameController extends Controller
{

    public function index(){
        $games = Game::all() ;
        return response()->json($games);
    }



    public function tournaments($id)
    {
        $game = Game::query()->with('tournaments_only')->findOrFail($id);
        return response($game);
    }

    public function matches(){
        $matches = Game::query()
            ->select("id" , "name")
            ->with("tournaments:id,game_id,name,logo")
            ->get();



        return response($matches) ;
    }


    public function matchess(){
        $games = Game::query()
            ->select("id" , "name")
            ->with("tournament")
            ->get();
        $matches_data = $games->map(function ($game) {
            return [
                "id" => $game->id,
                "name" => $game->name,
                "tournaments" => [
                    "id" => $game->tournament->id,
                    "name" => $game->tournament->name,
                    "logo" => $game->tournament->logo,
                    "team1" => [
                        "id" => $game->team1->id,
                        "name" => $game->team1->name,
                        "logo" => $game->team1->logo,
                        "score" => $game->team1_score,
                ],
                ],

                "team1" => [
                    "id" => $game->team1->id,
                    "name" => $game->team1->name,
                    "logo" => $game->team1->logo,
                    "score" => $game->team1_score,
                ],
                "team2" => [
                    "id" => $game->team2->id,
                    "name" => $game->team2->name,
                    "logo" => $game->team2->logo,
                    "score" => $game->team2_score,
                ],
                "live_status" => $game->status->name,
                "starting_date" => $game->starting_date,
            ];
        });
        return response($matches_data) ;    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGameRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matches = Game::query()->with("tournaments:id,game_id,name,logo")->select("id" , "name")->findOrFail($id);
//        DuelController::Reset_Status();
//        TeamController::result();
        return response($matches) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGameRequest  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGameRequest $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
