<?php

namespace Anderson\LeetcodeChallenges\ZigZagConversion;

class ZigZagConversion
{
    public static function zigZagConversion(string $string, int $numRows): string {
        if ($numRows === 1) {
            return $string;
        }
        $row = 0;
        $stringLength = strlen($string);
        $output = '';
        while ($row < $numRows) {
            if ($row === 0 || $row === $numRows - 1) {
                $offset = $row;
                while ($offset < $stringLength) {
                    $output .= $string[$offset];
                    $offset += $numRows * 2 - 2;
                }
            } else {
                $output .= $string[$row];
                $offset = $numRows * 2 - 2;
                while ($offset - $row < $stringLength) {
                    $output .= $string[$offset - $row];
                    if ($offset + $row < $stringLength) {
                        $output .= $string[$offset + $row];
                    }
                    $offset += $numRows * 2 - 2;
                }
            }
            $row++;
        }
        return $output;
    }
}