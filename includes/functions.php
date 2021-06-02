<?php

function listMovies(array $moviesList): string
{
    $listOfFilms = "<h1>Top Rated Films</h1>";
    foreach ($moviesList as $movie) {
        $listOfFilms .= "<p>Title: " . $movie['title'] . "</p>";
        $listOfFilms .= "<p>Year of Release: " . $movie['year_of_release'] . "</p>";
        $listOfFilms .= "<p>Rating: " . $movie['rating'] . "%</p><br>";
    }
    return $listOfFilms;
}
