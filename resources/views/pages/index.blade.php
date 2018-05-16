@extends('layouts.app')
 
@section('content')
    <div class = "jumbotron text-center">
        <h3>{{$title}}</h3>
        <p>This is A Laravel Tutorial from Laravel from Scratch Youtube Series.</p>
        <a class = "btn btn-lg btn-primary" href = "/login" role="button">Login</a><a class = "btn btn-lg btn-success" href = "/registration" role="button">Register</a>
    </div>
@endsection     