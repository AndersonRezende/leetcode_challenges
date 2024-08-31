<?php

namespace Anderson\LeetcodeChallenges\LongestSubstringWithoutRepeatingCharacters;

class LongestSubstringWithoutRepeatingCharacters
{
    public static function longestSubstringWithoutRepeatingCharacters(string $string): int {
        $longestSequence = 0;
        foreach (str_split($string) as $index => $char) {
            $nextCharPosition = strpos($string, $char, $index + 1) ?: strlen($string);
            $stringAux = "".$char;
            for ($i = $index + 1; $i < $nextCharPosition; $i++) {
                if (str_contains($stringAux, $string[$i])) {
                    break;
                }
                $stringAux .= $string[$i];
            }
            $stringAuxLength = strlen($stringAux);
            if ($stringAuxLength > $longestSequence) {
                $longestSequence = $stringAuxLength;
            }
        }
        return $longestSequence;
    }
}