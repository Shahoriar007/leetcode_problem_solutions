<?php 

// https://leetcode.com/problems/remove-element/description/?envType=study-plan-v2&envId=top-interview-150

class Solution {

    function removeElement(&$nums, $val) {
        foreach ($nums as $key => $arrayInt) {
            if ($val == $arrayInt) {
                unset($nums[$key]); 
            }
        }


    }
}

$removeElement = new Solution();

$nums = [1, 2, 3, 5, 7, 9, 4, 6, 4, 8, 4];
$val = 4;

$removeElement->removeElement($nums, $val);