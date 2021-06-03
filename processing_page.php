<?php

require_once 'includes/functions.php';

$title = $_POST['title'];
$year_of_release = intval($_POST['year_of_release']);
$rating = intval($_POST['rating']);

sendNewItemToDB($title, $year_of_release, $rating);