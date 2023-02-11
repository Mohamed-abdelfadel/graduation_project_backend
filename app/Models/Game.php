<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function tournament(){
        return $this->hasMany(Tournament::class) ;
    }

    public function news(){
        return $this->hasMany(News::class) ;
    }
}
