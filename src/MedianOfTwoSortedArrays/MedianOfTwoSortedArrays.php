<?php

namespace Anderson\LeetcodeChallenges\MedianOfTwoSortedArrays;

class MedianOfTwoSortedArrays
{
    public static function medianOfTwoSortedArrays(array $nums1, array $nums2): float {
        $array = array_merge($nums1, $nums2);
        sort($array, SORT_NUMERIC);
        $medianIndex = count($array) / 2;
        if (count($array) % 2 == 0) {
            return ($array[$medianIndex - 1] + $array[$medianIndex]) / 2;
        }
        return $array[$medianIndex];
    }
}