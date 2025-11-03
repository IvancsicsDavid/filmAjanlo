<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\MovieController;
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get("/", [MovieController::class,'index']);

Route::get("/movies/{category}", [MovieController::class, 'category'])->name('movies.category');

