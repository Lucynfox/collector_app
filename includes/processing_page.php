<?php

$title = $_POST['title'];
$year_of_release = intval($_POST['year_of_release']);
$rating = intval($_POST['rating']);

if (!isset($_POST['title']) && !is_string($_POST['title'])) {
    header("Location: functions.php?error=1");
} if (!isset($_POST['year_of_release']) && !is_int($_POST['year_of_release'])) {
    header("Location: functions.php?error=2");
} if (isset($_POST['rating']) && is_int($_POST['rating'])){
    header("Location: functions.php?error=3");
} else {
    $db = new PDO('mysql:host=db;dbname=top_movies', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);
    $query = $db->prepare("INSERT INTO films_list (title, year_of_release, rating) VALUES ('$title', '$year_of_release', '$rating')");
    $query->execute();
    header("Location: functions.php");
}