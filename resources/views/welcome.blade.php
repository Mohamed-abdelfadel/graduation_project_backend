@extends('layout')
@section('title')
    Welcome
@endsection
@section('content')

    <div class="container ">
        <h1 class="text-white">Links</h1>

        <a href="{{route('news')}}" class="btn btn-success col-3 m-3">News</a>
        <a href="{{route('games')}}" class="btn btn-success col-3 m-3">Games</a>
        <a href="{{route('tournaments')}}" class="btn btn-success col-3 m-3">Tournaments</a>
        <a href="{{route('teams')}}" class="btn btn-success col-3 m-3">Teams</a>
        <a href="{{route('players')}}" class="btn btn-success col-3 m-3">Players</a>
{{--        <a href="{{route('news')}}" class="btn btn-success col-3 m-3">News</a>--}}

    </div>
@endsection
