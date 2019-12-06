#!/usr/bin/env php
<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use ElliotJReed\AdventOfCode\TwoThousandAndFifteen\DayOne\PartOne;
use ElliotJReed\AdventOfCode\TwoThousandAndFifteen\DayOne\PartTwo;

$challengePartOne = <<<CHALLENGE
--- Day 1: Not Quite Lisp ---

Santa is trying to deliver presents in a large apartment building, but he can't find the right floor - the directions he got are a little confusing. He starts on the ground floor (floor 0) and then follows the instructions one character at a time.

An opening parenthesis, (, means he should go up one floor, and a closing parenthesis, ), means he should go down one floor.

The apartment building is very tall, and the basement is very deep; he will never find the top or bottom floors.

For example:

    (()) and ()() both result in floor 0.
    ((( and (()(()( both result in floor 3.
    ))((((( also results in floor 3.
    ()) and ))( both result in floor -1 (the first basement level).
    ))) and )())()) both result in floor -3.

To what floor do the instructions take Santa?
CHALLENGE;

$input = \file_get_contents(__DIR__ . '/Day_01_input.txt');

echo $challengePartOne . PHP_EOL;

echo 'Solution: ' . (new PartOne())->solve($input) . PHP_EOL;


$challengePartTwo = <<<CHALLENGE
--- Part Two ---

Now, given the same instructions, find the position of the first character that causes him to enter the basement (floor -1). The first character in the instructions has position 1, the second character has position 2, and so on.

For example:

    ) causes him to enter the basement at character position 1.
    ()()) causes him to enter the basement at character position 5.

What is the position of the character that causes Santa to first enter the basement?
CHALLENGE;

echo $challengePartTwo . PHP_EOL;

echo 'Solution: ' . (new PartTwo())->solve($input) . PHP_EOL;
