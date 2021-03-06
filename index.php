<?php

require 'includes/functions.php';

$moviesList = getMoviesListDataFromDB();

echo listMovies($moviesList);

echo "<h3>Add New Film</h3>";
echo '
<form action="processing_page.php" method="post">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="" required><br>
    <label for="year_of_release">Year of Release:</label>
    <input type="number" id="year_of_release" name="year_of_release" value="" min="1900" max="2030" required><br>
    <label for="rating">Rating(%):</label>
    <input type="number" id="rating" name="rating" value="%" min="0" max="100" required><br>
    <input type="submit" value="Add new film"> <br><br><br>
</form>';