<?php

namespace RegularExpressionMatching;

use Anderson\LeetcodeChallenges\RegularExpressionMatching\RegularExpressionMatching;
use Iterator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class RegularExpressionMatchingTest extends TestCase
{
    #[DataProvider('provider')]
    public function testRegularExpressionMatching(string $s, string $p, bool $expected): void {
        $output = RegularExpressionMatching::isMatch($s, $p);
        $this->assertEquals($expected, $output);
    }

    public static function provider(): Iterator
    {
        yield 'Carga 1' => ['aa', 'p', false];
        yield 'Carga 2' => ['aa', 'a*', true];
        yield 'Carga 3' => ['ab', '.*', true];
        yield 'Carga 4' => ['aaabbbbcd', 'aa*bbbbb*cd', true];
        yield 'Carga 5' => ['aaabbbbcd', 'aa*bb*bbb*cd', true];
        yield 'Carga 6' => ['aaabbbbcd', 'aa*.*', true];
        yield 'Carga 7' => ['aaabbbbcd', 'a.*', true];
        yield 'Carga 8' => ['aaabbbbcd', 'a.*d', true];
    }

    #[DataProvider('providerSwapZeroOrMoreTimesChar')]
    public function testSwapZeroOrMoreTimesChar(string $pattern, string $expected): void
    {
        $output = RegularExpressionMatching::swapZeroOrMoreTimesChar($pattern);
        $this->assertEquals($expected, $output);
    }

    public static function providerSwapZeroOrMoreTimesChar(): Iterator {
        yield 'Carga provider 1' => ['aa*aab', 'aaaa*b'];
        yield 'Carga provider 2' => ['aa*..*.b', 'aa*...*b'];
        yield 'Carga provider 3' => ['aa.*.*.b', 'aa..*b'];
        yield 'Carga provider 4' => ['aa.*..*.b', 'aa...*b'];
        yield 'Carga provider 5' => ['a*aa*ab', 'aaa*b'];
        yield 'Carga provider 6' => ['a*', 'a*'];
        yield 'Carga provider 7' => ['aa*bb*bbb*cd', 'aa*bbbb*cd'];
        yield 'Carga provider 8' => ['a.*d', 'a.*d'];
    }
}