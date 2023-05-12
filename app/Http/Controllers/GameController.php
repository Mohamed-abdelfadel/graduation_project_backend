<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Game_news;

class GameController extends Controller
{

    public function index(){
        $games = Game::all() ;
        return response()->json($games);
    }



    public function tournaments($id)
    {
        $game = Game::query()->with('tournament')->findOrFail($id);
        $data = array();
        foreach ($game->tournament as $tournament){
            $data[]=["id"=> $tournament->id ,"name"=> $tournament->name ,"logo"=> $tournament->logo];
        }
        return $data ;
    }

    public function news()
    {
        $news = Game_news::query()->get();
        return response($news) ;
    }

    public function matches(){
        $matches = Game::query()
            ->select("id" , "name")
            ->with("tournaments:id,game_id,name,logo")
            ->get();
        return response($matches) ;
    }
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
        return response($matches) ;;
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
