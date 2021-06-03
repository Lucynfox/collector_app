<?php

require 'includes/functions.php';

$db = connectToDB();
$query = $db->prepare('SELECT `title`, `year_of_release`, `rating`  FROM `films_list`;');
$query->execute();
$moviesList = $query->fetchAll();

$listOfFilms = listMovies($moviesList);
echo $listOfFilms;
