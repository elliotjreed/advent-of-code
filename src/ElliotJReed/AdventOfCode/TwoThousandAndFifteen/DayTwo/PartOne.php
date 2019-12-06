<?php

declare(strict_types=1);

namespace ElliotJReed\AdventOfCode\TwoThousandAndFifteen\DayTwo;

final class PartOne
{
    public function solve(string $input): int
    {
        $dimensionList = \explode("\n", \trim($input));
        $totalRequirePaper = 0;
        foreach ($dimensionList as $dimensions) {
            $totalRequirePaper += $this->calculateRequirePaper($dimensions);
        }

        return $totalRequirePaper;
    }

    private function calculateRequirePaper(string $dimensions): int
    {
        [$length, $width, $height] = \explode('x', $dimensions);

        $presentLength = $length * $width;
        $presentWidth = $width * $height;
        $presentHeight = $height * $length;

        $slack = \min([$presentLength, $presentWidth, $presentHeight]);

        return (($presentLength + $presentWidth + $presentHeight) * 2) + $slack;
    }
}
