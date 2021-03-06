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
        $expected = "<h1>Top Rated Films</h1><p>Title: It Happened One Night</p><p>Year of Release: 1934</p><p>Rating: 99%</p><br>";
        $result = listMovies($input);
        $this->assertEquals($expected, $result);
        $this->assertIsString($result);
    }
    public function testlistMovies_malformed()
    {
        $input = "title => It Happened One Night year_of_release => 1934 rating => 98";
        $this->expectException(TypeError::class);
        $result = listMovies($input);
    }
}