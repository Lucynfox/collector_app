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

function connectToDB() {
    $db = new PDO('mysql:host=db;dbname=top_movies', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);
    return $db;
}

function getMoviesListDataFromDB()
{
    $db = connectToDB();
    $query = $db->prepare('SELECT `title`, `year_of_release`, `rating`  FROM `films_list`;');
    $query->execute();
    $moviesList = $query->fetchAll();
    return $moviesList;
}

function sendNewItemToDB($title, $year_of_release, $rating) {
    $db = connectToDB();
    $query = $db->prepare('INSERT INTO films_list (`title`, `year_of_release`, `rating`) VALUES (:title, :year_of_release, :rating)');
    $query->execute([
        ':title' => $title,
        ':year_of_release' => $year_of_release,
        ':rating' => $rating
    ]);
    header("Location: http://localhost:1234/collector_app/index.php");
}