<?php
declare(strict_types=1);

namespace ElliotJReed\AdventOfCode\DayFive;

class PartOne
{
    public function solve(string $input): int
    {
        $words = \explode("\n", $input);
        $naughtyCharacterPairs = ['ab', 'cd', 'pq', 'xy'];

        $niceWords = 0;
        foreach ($words as $word) {
            if ($this->hasThreeVowels($word) && !$this->contains($word, $naughtyCharacterPairs) && $this->hasDoubleLetters($word)) {
                $niceWords++;
            }
        }

        return $niceWords;
    }

    public function contains($word, array $acceptableStrings): bool
    {
        foreach ($acceptableStrings as $acceptableString) {
            if (\stripos($word, $acceptableString) !== false) {
                return true;
            }
        }
        return false;
    }

    public function hasThreeVowels(string $word): bool
    {
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $vowelCount = 0;
        foreach (\str_split($word) as $character) {
            foreach ($vowels as $vowel) {
                if ($character === $vowel) {
                    $vowelCount++;
                }
            }
        }

        return $vowelCount >= 3;
    }

    private function hasDoubleLetters(string $word): bool
    {
        foreach (\range('a', 'z') as $character) {
            if (\stripos($word, $character . $character) !== false) {
                return true;
            }
        }

        return false;
    }
}
