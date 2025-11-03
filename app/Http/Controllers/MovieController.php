<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::getMovies();
        $categories = collect($movies)->pluck('Category')->unique()->values();

        return view('movies.index', compact('movies','categories'));
        //return view('movies.index', ['movies' => $movies]);
    }

    public function category(string $slug)
    {
        $movies = Movie::getMovies();
        $filteredMovies = collect($movies)->filter(function ($movie) use ($slug) {
            return $movie['Category'] === $slug;
        });

        if ($filteredMovies->isEmpty()){
            abort(404,"invalid category:$slug");
        }

        return view("movies.category", compact('filteredMovies'));
    }

    public function movie(string $id)
    {
        $movies = Movie::getMovies();

        $selectedMovie=$movies[$id];

        return view("movies.movie", compact('selectedMovie'));
    }
}
