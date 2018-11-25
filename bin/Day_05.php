#!/usr/bin/env php
<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use ElliotJReed\AdventOfCode\DayFive\PartOne;

$challengePartOne = <<<CHALLENGE
--- Day 5: Doesn't He Have Intern-Elves For This? ---

Santa needs help figuring out which strings in his text file are naughty or nice.

A nice string is one with all of the following properties:

    It contains at least three vowels (aeiou only), like aei, xazegov, or aeiouaeiouaeiou.
    It contains at least one letter that appears twice in a row, like xx, abcdde (dd), or aabbccdd (aa, bb, cc, or dd).
    It does not contain the strings ab, cd, pq, or xy, even if they are part of one of the other requirements.
CHALLENGE;

$input = file_get_contents(__DIR__ . '/Day_05_input.txt');

echo $challengePartOne . PHP_EOL;

echo 'Solution: ' . (new PartOne())->solve($input) . PHP_EOL;
