<?php

namespace Anderson\LeetcodeChallenges\ContainerWithMostWater;

class ContainerWithMostWater {

    /**
     * @param Integer[] $height
     * return Integer
     */
    public static function maxArea(array $height): int {
        $left = 0;
        $right = count($height) - 1;
        $maxArea = 0;

        while ($left < $right) {
            $min = min($height[$left], $height[$right]);
            $vol = $min * ($right - $left);
            $maxArea = max($maxArea, $vol);
            if ($min == $height[$left]) {
                $left++;
            } else {
                $right--;
            }
        }

        return $maxArea;
    }
}