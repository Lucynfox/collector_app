<?php

require 'functions.php';

$title = $_POST['title'];
$year_of_release = intval($_POST['year_of_release']);
$rating = intval($_POST['rating']);

$db = connectToDB();
$query = $db->prepare("INSERT INTO films_list (title, year_of_release, rating) VALUES ('$title', '$year_of_release', '$rating')");
$query->execute();
header("Location: functions.php");
