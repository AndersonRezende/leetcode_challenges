<?php

namespace ReverseInteger;

use Anderson\LeetcodeChallenges\ReverseInteger\ReverseInteger;
use Iterator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class ReverseIntegerTest extends TestCase
{
    #[DataProvider('provider')]
    public function testReverseInteger(int $num, int $expected): void
    {
        $reverseInteger = ReverseInteger::reverseInteger($num);
        $this->assertEquals($expected, $reverseInteger);
    }

    public static function provider(): Iterator
    {
        yield 'Carga 1' => [123, 321];
        yield 'Carga 2' => [-123, -321];
        yield 'Carga 3' => [120, 21];
        yield 'Carga 4' => [0, 0];
        yield 'Carga 5' => [2147483647, 0];
        yield 'Carga 6' => [-2147483648, 0];
    }
}