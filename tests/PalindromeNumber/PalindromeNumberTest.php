<?php

namespace PalindromeNumber;

use Anderson\LeetcodeChallenges\PalindromeNumber\PalindromeNumber;
use Iterator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class PalindromeNumberTest extends TestCase
{
    #[DataProvider('provider')]
    public function testPalindromeNumber(int $number, bool $expected): void {
        $output = PalindromeNumber::isPalindrome($number);
        $this->assertEquals($output, $expected);
    }

    public static function provider(): Iterator
    {
        yield 'Carga 1' => [121, true];
        yield 'Carga 2' => [-121, false];
        yield 'Carga 3' => [10, false];
        yield 'Carga 4' => [1001, true];
        yield 'Carga 5' => [10101, true];
    }
}