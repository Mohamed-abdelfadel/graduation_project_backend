<?php

namespace App\Http\Controllers;

use App\Models\Duel;
use App\Models\Game;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Game_news;
use App\Models\news;
use App\Models\Team;
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
        if(request('search')) {
            $search = request('search');
            $duels = Duel::query()
                ->select("id", "tournament_id", "team1_id", "team2_id", "playoff_id", "team1_score", "team2_score", "starting_date", "status_id")
                ->whereHas('team1', function($query) use ($search) {
                    $query->where('name', 'like', "%$search%");
                })
                ->orWhereHas('team2', function($query) use ($search) {
                    $query->where('name', 'like', "%$search%");
                })
                ->with(['tournament' => function ($query) {
                    $query->select('id', 'game_id', 'name', 'logo')
                        ->with('game:id,name');
                }],
                    'team1:id,name,logo',
                    'team2:id,name,logo',
                    'playoff:id,name',
                    'status:id,name'
                )
                ->get();

            $response = [];
            foreach ($duels as $duel) {
                $tournament = $duel->tournament;
                $tournamentArr = [
                    "id" => $tournament->id,
                    "game_id" => $tournament->game_id,
                    "name" => $tournament->name,
                    "logo" => $tournament->logo
                ];

                $team1 = $duel->team1;
                $team1Arr = [
                    "id" => $team1->id,
                    "name" => $team1->name,
                    "logo" => $team1->logo
                ];

                $team2 = $duel->team2;
                $team2Arr = [
                    "id" => $team2->id,
                    "name" => $team2->name,
                    "logo" => $team2->logo
                ];

                $playoff = $duel->playoff;
                $playoffArr = [
                    "id" => $playoff->id,
                    "name" => $playoff->name
                ];

                $status = $duel->status;
                $statusArr = [
                    "id" => $status->id,
                    "name" => $status->name
                ];

                $duelArr = [
                    "id" => $duel->id,
                    "tournament_id" => $duel->tournament_id,
                    "team1_id" => $duel->team1_id,
                    "team2_id" => $duel->team2_id,
                    "playoff_id" => $duel->playoff_id,
                    "team1_score" => $duel->team1_score,
                    "team2_score" => $duel->team2_score,
                    "starting_date" => $duel->starting_date,
                    "status_id" => $duel->status_id,
                    "team1" => $team1Arr,
                    "team2" => $team2Arr,
                    "playoff" => $playoffArr,
                    "status" => $statusArr
                ];

                if (!array_key_exists($tournament->id, $response)) {
                    $response[$tournament->id] = [
                        "id" => $tournament->id,
                        "name" => $tournament->name,
                        "game" => $tournament->game,
                        "logo" => $tournament->logo,
                        "duels" => [$duelArr]
                    ];
                } else {
                    $response[$tournament->id]["duels"][] = $duelArr;
                }
            }
            return response()->json(array_values($response));
        }

        else{
            $matches = Game::query()
                ->select("id" , "name")
                ->with("tournaments:id,game_id,name,logo")
                ->get();
            return response($matches) ;
        }




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
        DuelController::Reset_Status();
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
