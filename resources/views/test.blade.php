@extends('layout')
@section('title')
    API's
@endsection
@section('content')
    <div class="container d-flex justify-content-center bg-success">
        <h1 class="display-1 fw-bold">testing API's</h1>
    </div>
    <div class="content m-3">
        <p class="fs-2"> this is export of API</p>
        @foreach( $games as $game)
            <p>{{$game->game}}</p>
        @endforeach
    </div>
@endsection
