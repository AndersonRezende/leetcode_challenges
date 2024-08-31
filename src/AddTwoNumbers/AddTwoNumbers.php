<?php

namespace Anderson\LeetcodeChallenges\AddTwoNumbers;

class AddTwoNumbers
{
    public static function addTwoNumbers(ListNode $l1, ListNode $l2): ListNode {
        $carry = 0;
        $start = new ListNode();
        $current = $start;
        while ($l1 != null || $l2 != null) {
            $sum = $carry;
            if ($l1 != null) {
                $sum += $l1->value;
            }
            if ($l2 != null) {
                $sum += $l2->value;
            }
            $l1 = $l1->next;
            $l2 = $l2->next;

            $carry = $sum > 9 ? 1 : 0;
            $current->value = $sum > 9 ? $sum % 10 : $sum;
            if ($l1 != null || $l2 != null) {
                $current->next = new ListNode();
                $current = $current->next;
            } elseif ($carry != 0) {
                $current->next = new ListNode($carry);
            }
        }
        return $start;
    }
}