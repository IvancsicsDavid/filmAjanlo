<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public static function getMovies()
    {
        return [
            1 => [
            'Title' =>'The Matrix',
            'Director' => 'Christopher Nolan',
            'Year' => 2010,
            'Category' => 'Sci-fi',
            'Description' => 'Asd-asd-01',
            'Image' => 'https://www.imdb.com/title/tt0133093/mediaviewer/rm1764071938/?ref_=tt_ov_i'
            ],
            2 => [
            'Title' =>'Transformers',
            'Director' => 'Micheal Bay',
            'Year' => 2007,
            'Category' => 'Sci-fi',
            'Description' => 'Asd-Asd-02',
            'Image' => 'https://www.imdb.com/title/tt0418279/mediaviewer/rm1758532608/?ref_=tt_ov_i'
            ],
            3 => [
            'Title' =>'The Godfather',
            'Director' => 'Francis Ford Coppola',
            'Year' => 1972,
            'Category' => 'Drama',
            'Description' => 'Asd-asd-03',
            'Image' => 'https://www.imdb.com/title/tt0068646/mediaviewer/rm3135369473/?ref_=tt_ov_i'
            ],
            4 => [
            'Title' =>'Inception',
            'Director' => 'Christopher Nolan',
            'Year' => 2010,
            'Category' => 'Sci-fi',
            'Description' => 'Asd-Asd-04',
            'Image' => 'https://www.imdb.com/title/tt1375666/mediaviewer/rm4241487105/?ref_=tt_ov_i'
            ],
            5 => [
            'Title' =>'Pulp Fiction',
            'Director' => 'Quentin Tarantino',
            'Year' => 1994,
            'Category' => 'Dark Comedy',
            'Description' => 'Asd-asd-05',
            'Image' => 'https://www.imdb.com/title/tt0110912/mediaviewer/rm1229746689/?ref_=tt_ov_i'
            ]
        ];
    }
}
