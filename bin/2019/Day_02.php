#!/usr/bin/env php
<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use ElliotJReed\AdventOfCode\TwoThousandAndNineteen\DayTwo\PartOne;
//use ElliotJReed\AdventOfCode\TwoThousandAndNineteen\DayTwo\PartTwo;

$challengePartOne = <<<CHALLENGE

CHALLENGE;

$input = \file_get_contents(__DIR__ . '/Day_01_input.txt');

echo $challengePartOne . PHP_EOL;

echo 'Solution: ' . (new PartOne())->solve(\array_map('intval', \explode(',', \trim($input)))) . PHP_EOL;

//
//$challengePartTwo = <<<CHALLENGE
//CHALLENGE;
//
//echo $challengePartTwo . PHP_EOL;
//
//echo 'Solution: ' . (new PartTwo())->solve(\array_map('intval', \explode("\n", \trim($input)))) . PHP_EOL;
