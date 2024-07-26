<?php
// https://leetcode.com/problems/maximum-product-difference-between-two-pairs/

$nums = [5,6,2,7,4];

function maxProductDifference($nums) {
        
    sort($nums);
    $size = count($nums);

    $diff = ($nums[$size - 1] * $nums[$size - 2]) - ($nums[0] * $nums[1]);
    return $diff;
}

// Best

class Solution {

    
    function maxProductDifference($nums) {
       
        $first_min = min($nums); 
        $first_max = max($nums); 

        $indexToDelete = array_search($first_min, $nums);
        unset($nums[$indexToDelete]);

        $indexToDelete = array_search($first_max, $nums);
        unset($nums[$indexToDelete]);

        $second_min = min($nums); 
        $second_max = max($nums); 

        return ($first_max * $second_max) - ($first_min * $second_min);

    }
}
?>

