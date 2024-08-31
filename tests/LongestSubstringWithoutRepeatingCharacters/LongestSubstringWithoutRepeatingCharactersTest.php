<?php

namespace LongestSubstringWithoutRepeatingCharacters;

use Anderson\LeetcodeChallenges\LongestSubstringWithoutRepeatingCharacters\LongestSubstringWithoutRepeatingCharacters;
use Iterator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class LongestSubstringWithoutRepeatingCharactersTest extends TestCase
{
    #[DataProvider('providerLongestSubstringWithoutRepeatingCharacters')]
    public function testLongestSubstringWithoutRepeatingCharacters(string $string, int $output): void {
        $longestLength = LongestSubstringWithoutRepeatingCharacters::longestSubstringWithoutRepeatingCharacters($string);
        $this->assertEquals($output, $longestLength);
    }

    public static function providerLongestSubstringWithoutRepeatingCharacters(): Iterator
    {
        yield 'carga 1' => ["abcabcbb", 3];
        yield 'carga 2' => ["bbbbbbbb", 1];
        yield 'carga 3' => ["pwwkew", 3];
        yield 'carga 4' => ["a", 1];
        yield 'carga 5' => ["", 0];
        yield 'carga 6' => ["aaaaaaaabbbbcccddefghijklllmnopqrstuvwxyzaaa", 16];
    }
}