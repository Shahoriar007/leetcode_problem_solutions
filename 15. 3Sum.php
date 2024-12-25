<?php 


// https://leetcode.com/problems/3sum/description/?envType=study-plan-v2&envId=top-interview-150

// -----------Solution 1
//  Sort the given array
//  Minus 1st number and make it as 2Sum 
//  Solve the 2Sum


// ----------Trying solution 1

class Solution {
 
    public function threeSum(array $nums): array {
        // Step #1: Sort the array
        sort($nums);
        $result = [];
 
        // Step #2: Iterate through the array
        for ($i = 0; $i < count($nums) - 2; $i++) {
 
            // Step #3: Skip duplicate elements
            if ($i > 0 && $nums[$i] === $nums[$i - 1]) {
                continue;
            }
 
            // Step #4: Set pointers
            $left = $i + 1;
            $right = count($nums) - 1;
 
            while ($left < $right) {
                // Step #5: Calculate the sum
                $sum = $nums[$i] + $nums[$left] + $nums[$right];
 
                // Step #6.1: If the sum is zero, store the result
                if ($sum === 0) {
                    $result[] = [$nums[$i], $nums[$left], $nums[$right]];
 
                    // Step #6.1.1: Move the pointers inward
                    $left++;
                    $right--;
 
                    // Step #6.1.2: Skip duplicate elements
                    while ($left < $right && $nums[$left] === $nums[$left - 1]) {
                        $left++;
                    }
                    while ($left < $right && $nums[$right] === $nums[$right + 1]) {
                        $right--;
                    }
                }
 
                // Step #6.2: If the sum is less than zero, move the left pointer
                elseif ($sum < 0) {
                    $left++;
                }
 
                // Step #6.3: If the sum is greater than zero, move the right pointer
                else {
                    $right--;
                }
            }
        }
 
        // Step #7: Return the result
        return $result;
    }
}
