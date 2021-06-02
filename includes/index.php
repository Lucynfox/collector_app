<?php

$db = new PDO('mysql:host=db;dbname=top_movies', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);

$query = $db->prepare('SELECT *  FROM `films_list`;');
$query->execute();
$moviesList = $query->fetchAll();

//var_dump($moviesList);

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

//if (isset($_GET["error"]) && $_GET["error"] == 1) {
//    echo "Incorrect Title details. Please try again.";
//} elseif (isset($_GET["error"]) && $_GET["error"] == 2) {
//    echo "Incorrect year of release details. Please try again.";
//} elseif (isset($_GET["error"]) && $_GET["error"] == 3) {
//    echo "Incorrect rating input details. Please try again.";
//}

//function form() {
//    echo "<h3>Add New Film</h3>";
//    echo '<form action="processing_page.php" method="post">
//<label for="title">Title:</label>
//  <input type="text" id="title" name="title" value=""><br>
//  <label for="year_of_release">Year of Release:</label>
//  <input type="text" id="year_of_release" name="year_of_release" value=""><br>
//  <label for="rating">Rating:</label>
//  <input type="text" id="rating" name="rating" value="%"><br>
//  <input type="submit" value="Add new film"> <br><br><br>
//  </form>';
//}


