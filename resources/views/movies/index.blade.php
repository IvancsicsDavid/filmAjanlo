@extends('layout')


@section('content')
    <h2>Movies' categories:</h2>
    <ul>
    @foreach ($categories as $category)
    <a href="{{route('movies.category', $category)}}">{{$category}}</a>
    @endforeach
    </ul>
<br>
<h2>Movies:</h2>
    <ul>
    @foreach ($movies as $movie)
    <li> {{$movie["Title"]}} ({{$movie["Year"]}})</li>
    @endforeach
    </ul>
@endsection
