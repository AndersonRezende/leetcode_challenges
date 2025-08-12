<?php

namespace ContainerWithMostWater;

use Anderson\LeetcodeChallenges\ContainerWithMostWater\ContainerWithMostWater;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class ContainerWithMostWaterTest extends TestCase
{

    public static function provider(): \Iterator
    {
        yield 'Carga 1' => [[1,8,6,2,5,4,8,3,7], 49];
        yield 'Carga 2' => [[1,1], 1];
        yield 'Carga 3' => [[4,3,2,1,4], 16];
        yield 'Carga 4' => [[1,2,1], 2];
        yield 'Carga 5' => [[1,2,3,4,5], 6];
    }

    #[DataProvider('provider')]
    public function testContainerWithMostWater(array $height, int $expected): void {
        $regularExpressionMatching = ContainerWithMostWater::maxArea($height);
        $this->assertEquals($expected, $regularExpressionMatching);
    }
}
