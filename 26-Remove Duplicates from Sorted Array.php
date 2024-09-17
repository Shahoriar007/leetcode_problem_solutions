<?php 

class Solution {

    function removeDuplicates(&$nums) {
        if (count($nums) == 0) {
            return 0;
        }

        $uniqueIndex = 0;

        for ($i = 1; $i < count($nums); $i++) {
            if ($nums[$i] != $nums[$uniqueIndex]) {
                $uniqueIndex++;
                $nums[$uniqueIndex] = $nums[$i];
            }
        }

        return $uniqueIndex + 1;
    }
}

$removeDuplicates = new Solution();

$nums = [1, 1, 2];
$k = $removeDuplicates->removeDuplicates($nums);

echo $k;
