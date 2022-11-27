@extends('layout')
@section('title')
    Welcome
@endsection
@section('content')
    <div class="container d-flex justify-content-center">

            <a href="{{route('login')}}" class="btn btn-success col-3 m-3">Login</a>
            <a href="{{route('register')}}" class="btn btn-success col-3 m-3">Register</a>


    </div>
@endsection
