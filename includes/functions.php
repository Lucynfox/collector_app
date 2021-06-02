<?php

function listMovies($moviesList)
{
    $listOfFilms = "<h1>Top Rated Films</h1>";
    foreach ($moviesList as $movie) {
        //    echo "Rank: ". $movie['rank'];
        $listOfFilms .= "<br>Title: ". $movie['title'];
        $listOfFilms .= "<br>Year of Release: ". $movie['year_of_release'];
        $listOfFilms .= "<br>Rating: ". $movie['rating'] . "%<br><br>";
        return $listOfFilms;
        //    echo "<br>No. of Reviews: ". $movie['number_of_reviews'] . "<br><br>";
    }
}
listMovies($moviesList);
