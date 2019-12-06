<?php

declare(strict_types=1);

namespace ElliotJReed\AdventOfCode\TwoThousandAndFifteen\DayFour;

final class PartTwo
{
    public function solve(string $input): int
    {
        $i = 0;
        while (true) {
            $hash = \md5($input . $i);

            if (\strpos($hash, '000000') === 0) {
                return $i;
            }

            $i++;
        }
    }
}
