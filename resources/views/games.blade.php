@extends('layout')
@section('title')
    Games
@endsection
@section('content')
    <div class="container d-flex justify-content-center bg-success">
        <h1 class="display-1 fw-bold">News Api</h1>
    </div>
    <div class="content m-3">
        <p class="fs-2"> this is export of Api</p>
        @foreach($news as $new)
        <p class="fs-4">{{$new->title}}</p>
        @endforeach
    </div>
@endsection
