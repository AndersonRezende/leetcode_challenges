<?php

namespace ZigzagConversion;

use Anderson\LeetcodeChallenges\ZigZagConversion\ZigZagConversion;
use Iterator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class ZigzagConversionTest extends TestCase
{
    #[DataProvider('provider')]
    public function testZigzagConversion(string $string, int $rows, string $expected): void
    {
        $zigZagConversion = ZigZagConversion::zigZagConversion($string, $rows);
        $this->assertEquals($expected, $zigZagConversion);
    }

    public static function provider(): Iterator
    {
        yield 'Carga 1' => ['PAYPALISHIRING', 3, 'PAHNAPLSIIGYIR'];
        yield 'Carga 2' => ['PAYPALISHIRING', 4, 'PINALSIGYAHRPI'];
        yield 'Carga 3' => ['A', 1, 'A'];
        yield 'Carga 4' => ['ABCD', 3, 'ABDC'];
    }
}