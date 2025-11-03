@extends('layout')


@section('content')
<h2>Filtered Movies:</h2>
    <ul>
    @foreach ($filteredMovies as $movie)
    <li> {{$movie["Title"]}} ({{$movie["Year"]}})</li>
    @endforeach
    </ul>
@endsection
