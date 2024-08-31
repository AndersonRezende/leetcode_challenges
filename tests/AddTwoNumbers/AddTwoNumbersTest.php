<?php

namespace AddTwoNumbers;

use Anderson\LeetcodeChallenges\AddTwoNumbers\AddTwoNumbers;
use Anderson\LeetcodeChallenges\AddTwoNumbers\ListNode;
use Iterator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class AddTwoNumbersTest extends TestCase
{
    #[DataProvider('providerAddTwoNumbers')]
    public function testAddTwoNumbers(ListNode $l1, ListNode $l2, $expectedResult): void {
        $result = AddTwoNumbers::addTwoNumbers($l1, $l2);
        $this->assertEquals($expectedResult, $result);
    }

    public static function providerAddTwoNumbers(): Iterator
    {
        yield 'carga 1' => [
            new ListNode(2, new ListNode(4, new ListNode(3))),
            new ListNode(5, new ListNode(6, new ListNode(4))),
            new ListNode(7, new ListNode(0, new ListNode(8))),
        ];
        yield 'carga 2' => [
            new ListNode(0),
            new ListNode(0),
            new ListNode(0)
        ];
        yield 'carga 3' => [
            new ListNode(9, new ListNode(9, new ListNode(9, new ListNode(9)))),
            new ListNode(9, new ListNode(9)),
            new ListNode(8, new ListNode(9, new ListNode(0, new ListNode(0, new ListNode(1))))),
        ];
        yield 'carga 4' => [
            new ListNode(2, new ListNode(4, new ListNode(3))),
            new ListNode(5, new ListNode(6, new ListNode(4))),
            new ListNode(7, new ListNode(0, new ListNode(8))),
        ];
    }
}