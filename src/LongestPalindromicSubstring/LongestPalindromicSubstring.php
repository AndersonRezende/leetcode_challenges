<?php

namespace Anderson\LeetcodeChallenges\LongestPalindromicSubstring;

class LongestPalindromicSubstring
{
    public static function longestPalindromicSubstring(string $string): string {
        $max = 0;
        $stringLength = strlen($string);
        $longestPalindromicSubstring = '';
        for ($i = 0; $i < $stringLength; $i++) {
            for ($j = $stringLength; $j > $i; $j--) {
                if (self::isPalindromic(substr($string, $i, $j - $i))) {
                    if ($j - $i > $max) {
                        $max = $j - $i;
                        $longestPalindromicSubstring = substr($string, $i, $j - $i);
                    }
                    break;
                }
            }
            if ($max >= $stringLength - $i) {
                break;
            }
        }
        return $longestPalindromicSubstring;
    }

    public static function isPalindromic(string $string): bool {
        $stringLength = strlen($string);
        for ($i = 0; $i < $stringLength; $i++) {
            if ($string[$i] !== $string[$stringLength - $i - 1]) {
                return false;
            }
        }
        return true;
    }
}