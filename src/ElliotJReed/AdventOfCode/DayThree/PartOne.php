<?php
declare(strict_types=1);

namespace ElliotJReed\AdventOfCode\DayThree;

class PartOne
{
    public function solve(string $input): int
    {
        $moves = \str_split($input);

        $currentCoordinate = [0, 0];
        $coordinatesVisited = [$currentCoordinate];

        foreach ($moves as $move) {
            $currentCoordinate = $this->calculateNewCoordinate($move, $currentCoordinate);
            $coordinatesVisited[] = $currentCoordinate;
        }

        return \count(\array_unique($coordinatesVisited, SORT_REGULAR));
    }

    private function calculateNewCoordinate(string $move, array $currentCoordinate): array
    {
        if ($move === '>') {
            $currentCoordinate = [$currentCoordinate[0] + 1, $currentCoordinate[1]];
        }
        if ($move === '<') {
            $currentCoordinate = [$currentCoordinate[0] - 1, $currentCoordinate[1]];
        }
        if ($move === '^') {
            $currentCoordinate = [$currentCoordinate[0], $currentCoordinate[1] + 1];
        }
        if ($move === 'v') {
            $currentCoordinate = [$currentCoordinate[0], $currentCoordinate[1] - 1];
        }

        return $currentCoordinate;
    }
}
