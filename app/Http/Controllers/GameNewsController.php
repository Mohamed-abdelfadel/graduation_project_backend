<?php

namespace App\Http\Controllers;

use App\Models\Game_news;
use Illuminate\Http\Request;

class GameNewsController extends Controller
{
    public function index(){
        $game = Game_news::query()->orderBy('id' , 'desc')->paginate(12);
        return response($game);
    }
}
