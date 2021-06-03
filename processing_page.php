<?php

require_once 'includes/functions.php';

if (empty($_POST)) {
    header('Location: index.php');
}

$title = $_POST['title'];
$year_of_release = intval($_POST['year_of_release']);
$rating = intval($_POST['rating']);

sendNewItemToDB($title, $year_of_release, $rating);
header("Location: http://localhost:1234/collector_app/index.php");