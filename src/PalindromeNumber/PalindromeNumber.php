<?php

namespace Anderson\LeetcodeChallenges\PalindromeNumber;

class PalindromeNumber
{
    public static function isPalindrome(int $x): bool {
        if ($x < 0) {
            return false;
        }
        $reverse = 0;
        $originalNumber = $x;
        while ($originalNumber > 0) {
            $reverse += $originalNumber % 10;
            $originalNumber = (int) ($originalNumber/10);
            if ($originalNumber > 0) {
                $reverse *= 10;
            }
        }
        return $x === $reverse;
    }
}