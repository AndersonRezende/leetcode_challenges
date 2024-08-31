<?php

namespace Anderson\LeetcodeChallenges\TwoSum;
class TwoSum
{
     public static function twoSum($nums, $target): array {
         $result = [];
         foreach ($nums as $key => $num) {
             $expectedNumber = $target - $num;
             if (array_key_exists($expectedNumber, $result)) {
                 return [$result[$expectedNumber], $key];
             }
             $result[$num] = $key;
         }
        return [0,1];
     }
}