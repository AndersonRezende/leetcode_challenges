<?php

namespace TwoSum;

use Anderson\LeetcodeChallenges\TwoSum\TwoSum;
use Iterator;
use PHPUnit\Framework\TestCase;

class TwoSumTest extends TestCase
{
    /**
     * @dataProvider providerTwoSum
     */
    public function testTwoSum(array $input, int $target, array $output): void
    {
        $twoSumResult = TwoSum::twoSum($input, $target);
        $this->assertEquals($output, $twoSumResult);
    }

    public static function providerTwoSum(): Iterator
    {
        yield 'carga 1' => [[2, 7, 11, 15], 9, [0, 1]];
        yield 'carga 2' => [[3, 2, 4], 6, [1, 2]];
        yield 'carga 3' => [[3, 3], 6, [0, 1]];
        yield 'carga 4' => [[3, 2, 3], 6, [0, 2]];
        yield 'carga 5' => [[-5, 2, 8], 3, [0, 2]];
    }

}