<?php

require '../includes/functions.php';

use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    public function testlistMovies_success()
    {
        $input = [
            ["title" => "It Happened One Night",
            "year_of_release" => "1934",
            "rating" => "99"]
        ];
        $expected = "<h1>Top Rated Films</h1><br>Title: It Happened One Night<br>Year of Release: 1934<br>Rating: 99%<br><br>";
        $result = listMovies($input);
        $this->assertEquals($expected, $result);
        $this->assertIsString($result);
    }
}