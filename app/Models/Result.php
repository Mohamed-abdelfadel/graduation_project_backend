<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    public function playoff(){
        return $this->belongsTo(Playoff::class) ;
    }
    public function team(){
        return $this->belongsTo(Team::class) ;
    }
    public function duel(){
        return $this->belongsTo(Duel::class) ;
    }
}
