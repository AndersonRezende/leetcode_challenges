<?php

namespace Anderson\LeetcodeChallenges\ReverseInteger;

class ReverseInteger
{
    public static function reverseInteger(int $num): int {
        $negative = $num < 0;
        $num = abs($num);
        $reverse = 0;
        while ($num > 0) {
            $reverse += $num % 10;
            $num = (int) ($num / 10);
            if ($num > 0) {
                $reverse *= 10;
            }
        }
        $reverse = $negative ? -$reverse : $reverse;

        return $reverse;
    }

    /*
    public static function reverseInteger(int $num): int {
        if ($num < 0) {
            $reverse = '-'.strrev(substr($num, 1));
        } else {
            $reverse = strrev($num);
        }
        $reverse = intval($reverse);
        if ($reverse < 2147483647 && $reverse > -2147483648) {
            return $reverse;
        }
        return 0;
    }
    */
}