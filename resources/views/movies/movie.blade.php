@extends('layout')


@section('content')
    <h2>{{$selectedMovie["Title"]}} - ({{$selectedMovie["Year"]}})</h2>
    <h3>Director: {{$selectedMovie["Director"]}}</h3>
    <img src="{{$selectedMovie["Image"]}}">
    <br>
    <hr>
    <br>
    <p>{{$selectedMovie["Description"]}}</p>
@endsection
