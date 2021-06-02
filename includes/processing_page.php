<?php

//echo isset($_POST['title']);
//echo isset($_POST['year_of_release']);
//echo isset($_POST['rating']);
//echo is_string($_POST['title']);
//echo is_int($_POST['year_of_release']);
////echo is_int($_POST['rating']);
//
//
$title = $_POST['title'];
$year_of_release = intval($_POST['year_of_release']);
$rating = intval($_POST['rating']);
////echo $_POST['number_of_reviews'];


if (!isset($_POST['title']) && !is_string($_POST['title'])) {
    header("Location: index.php?error=1");
} if (!isset($_POST['year_of_release']) && !is_int($_POST['year_of_release'])) {
    header("Location: index.php?error=2");
}  if (isset($_POST['rating']) && is_int($_POST['rating'])){
    header("Location: index.php?error=3");
} else {
    $db = new PDO('mysql:host=db;dbname=top_movies', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO:: FETCH_ASSOC);
    $query = $db->prepare("INSERT INTO films_list (title, year_of_release, rating) VALUES ('$title', '$year_of_release', '$rating')");
    $query->execute();
    header("Location: index.php");
}


//$age = $_GET['age'];
//
//if (is_int($age) && $age > 0 && $age < 150) {
//    // do stuff
//} else {
//    // tell user there was an error.
//}

//$user_info = “INSERT INTO table_name (username, email) VALUES ('$_POST[username]', '$_POST[email]')”;
//$query = 'INSERT INTO users (firstname, lastname, email) VALUES (?, ?, ?)';
//$result = $db->prepare($query);
//$result->bind_param('sss', $firstname, $lastname, $email);
//$result->execute();
//free($result); ?>