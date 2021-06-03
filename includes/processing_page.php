<?php

//require '../index.php';

$title = $_POST['title'];
$year_of_release = intval($_POST['year_of_release']);
$rating = intval($_POST['rating']);

$db = new PDO('mysql:host=db;dbname=top_movies', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);
$query = $db->prepare("INSERT INTO films_list (title, year_of_release, rating) VALUES ('$title', '$year_of_release', '$rating')");
$query->execute();
header("Location: http://localhost:1234/collector_app/index.php");