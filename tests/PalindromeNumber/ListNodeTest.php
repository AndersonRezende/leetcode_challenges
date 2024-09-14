<?php

namespace AddTwoNumbers;

use Anderson\LeetcodeChallenges\AddTwoNumbers\ListNode;
use PHPUnit\Framework\TestCase;

class ListNodeTest extends TestCase
{
    public function testListNode(): void {
        $listNode = new ListNode();
        $listNode->value = 5;
        $listNode2 = new ListNode(6);
        $listNode->next = $listNode2;

        $this->assertEquals(5, $listNode->value);
        $this->assertEquals(6, $listNode->next->value);
        $this->assertEquals($listNode2, $listNode->next);
        $this->assertNull($listNode->next->next);
    }
}