<?php

namespace App\Http\Controllers;

use App\Models\Game_news;
use App\Models\User;
use Illuminate\Http\Request;

class GameNewsController extends Controller
{
    public function index(){
        $game = Game_news::query()->orderBy('id' , 'desc')->paginate(9);
        return response($game);
    }
    public function show($id){
        $game = Game_news::query()->findOrFail($id);
        return response($game);
    }
    public function store(Request $request){
        $news = new Game_news();
        $news->image = $request['image'];
        $news->title = $request['title'];
        $news->description = $request['description'];
        $news->author = $request['author'];
        $news->game_id = $request['game_id'];
        $news->save();

        $FcmToken = User::whereNotNull('device_key')
            ->pluck('device_key');

        if (count($FcmToken) == 0) {
            return response()->json(['data' => 'Added Successfully ss'], 200);
        }

        $data = [
            "registration_ids" => $FcmToken,
            "notification" => [
                "title" => "check news !",
                "body" => "There are new feed in news go check it now !"
            ]
        ];
        FirebaseController::sendWebNotification($data);

        return response()->json(['data' => 'created successfully'], 200);
    }
}
