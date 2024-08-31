<?php

namespace MedianOfTwoSortedArrays;

use Anderson\LeetcodeChallenges\MedianOfTwoSortedArrays\MedianOfTwoSortedArrays;
use Iterator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class MedianOfTwoSortedArraysTest extends TestCase
{
    #[DataProvider('providerMedianOfTwoSortedArrays')]
    public function testMedianOfTwoSortedArrays(array $nums1, array $nums2, float $output): void
    {
        $result = MedianOfTwoSortedArrays::medianOfTwoSortedArrays($nums1, $nums2);
        $this->assertEquals($output, $result);
    }

    public static function providerMedianOfTwoSortedArrays(): Iterator
    {
        yield 'carga 1' => [[1,3], [2], 2.0];
        yield 'carga 2' => [[1,2], [3,4], 2.5];
        yield 'carga 3' => [[1,3], [2,4], 2.5];
    }
}