<?php

namespace Anderson\LeetcodeChallenges\StringToInteger;

class StringToInteger
{
    public static function stringToInteger(string $string): int {
        $index = -1;
        $output = '';
        $signs = ['+', '-'];
        while ($index + 1 < strlen($string)) {
            $index++;
            $char = $string[$index];

            if (is_numeric($char)) {
                $output .= $char;
                continue;
            }

            if (in_array($char, $signs)) {
                if (strlen($output) === 0) {
                    $output .= $char;
                } else {
                    break;
                }
            } elseif ($char === ' ') {
                if (strlen($output) > 0) {
                    break;
                }
            } else {
                break;
            }
        }
        $output = intval($output);
        if ($output <= -2147483648)
            return -2147483648;
        if ($output >= 2147483647)
            return 2147483647;

        return $output;
    }
}