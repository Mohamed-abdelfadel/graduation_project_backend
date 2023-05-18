<?php

namespace App\Http\Controllers;

use App\Models\Tournament_news;
use Illuminate\Http\Request;

class TournamentNewsController extends Controller
{
    public function index(){
        $news = Tournament_news::query()->get();
        return response($news);
    }

    public function tournament_news($id){
        $news = Tournament_news::query()->where("tournament_id" ,"=" , $id)->get();
        return response($news) ;
    }
}
