<?php

namespace StringToInteger;

use Anderson\LeetcodeChallenges\StringToInteger\StringToInteger;
use Iterator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class StringToIntegerTest extends TestCase
{
    #[DataProvider('provider')]
    public function testStringToInteger(string $string, int $expected): void
    {
        $stringToInteger = StringToInteger::stringToInteger($string);
        $this->assertEquals($expected, $stringToInteger);
    }

    public static function provider(): Iterator
    {
        yield 'Carga 1' => ["42", 42];
        yield 'Carga 2' => ["-042", -42];
        yield 'Carga 3' => ["1337c0d3", 1337];
        yield 'Carga 4' => ["0-1", 0];
        yield 'Carga 5' => ["words and 987", 0];
        yield 'Carga 6' => ["--123", 0];
        yield 'Carga 7' => ["-+123", 0];
        yield 'Carga 8' => ["-a123", 0];
        yield 'Carga 9' => [" -a123", 0];
        yield 'Carga 10' => [" +1a23", 1];
        yield 'Carga 11' => ["-91283472332", -2147483648];
        yield 'Carga 12' => ["-91283472333", -2147483648];
    }
}