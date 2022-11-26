<?php

namespace App\Http\Controllers;

use App\Models\Api;
use App\Http\Requests\StoreApiRequest;
use App\Http\Requests\UpdateApiRequest;
class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $games = Api::all() ;
        return view('test' , compact('games')) ;
    }
    public function index_api(){
        $games = Api::all() ;
        return response()->json($games);
    }
}
