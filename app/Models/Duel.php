<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Duel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    public function playoff(){
        return $this->belongsTo(Playoff::class) ;
    }

    public function tournament(){
        return $this->belongsTo(Tournament::class) ;
    }
    public function team1()
    {
        return $this->belongsTo(Team::class , "team1_id" , "id" );
    }
    public function team2()
    {
        return $this->belongsTo(Team::class , "team2_id" , "id" );
    }
    public function game(){
        return $this->belongsTo(Game::class) ;
    }
    public function status(){
        return $this->belongsTo(Status::class) ;
    }
}
