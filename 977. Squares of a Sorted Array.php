<?php
class Solution {

    function sortedSquares($nums) {
        
        $squaredNums = array_map(function($n) {
            return $n * $n;
        }, $nums);

        sort($squaredNums);

        return $squaredNums;
    }
}

// Example usage
$solution = new Solution();
$nums = [-4, -1, 0, 3, 10];
$result = $solution->sortedSquares($nums);

print_r($result);
// Output: Array ( [0] => 0 [1] => 1 [2] => 9 [3] => 16 [4] => 100 )
