<?php

require 'includes/functions.php';

$db = new PDO('mysql:host=db;dbname=top_movies', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);
$query = $db->prepare('SELECT `title`, `year_of_release`, `rating`  FROM `films_list`;');
$query->execute();
$moviesList = $query->fetchAll();

$listOfFilms = listMovies($moviesList);
echo $listOfFilms;
