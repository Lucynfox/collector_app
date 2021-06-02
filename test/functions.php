<?php


require '../includes/functions.php';

use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    public function testlistMovies_success()
    {
        $input = {""["title"]=> string(21) "It Happened One Night" ["year_of_release"]=> string(4) "1934" ["number_of_reviews"]=> string(2) "96" ["rating"]=> string(2) "99" ["rank"]=> string(1) "1"};

        $result = testlistMovies($input);

        $this->assertIsString($result);
    }

    public function testlistMovies_failure()
    {
//        $input = [1, 2, 3, 4];
//        $expected = [3, 7];
//        $result = calculateScores($input);
//
//        $this->assertIsArray($result);
//        $this->assertCount(2, $result);
//        $this->assertIsInt($result[0]);
//        $this->assertEquals($expected, $result);
    }
