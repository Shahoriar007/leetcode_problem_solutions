<?php 

class Solution {
        function removeDuplicates(&$nums) {
            if (count($nums) == 0) {
                return 0;
            }
    
            $j = 1;
            $count = 1;
    
            for ($i = 1; $i < count($nums); $i++) {
                if ($nums[$i] == $nums[$i - 1]) {
                    $count++;
                } else {
                    $count = 1;
                }
    
                if ($count <= 2) {
                    $nums[$j] = $nums[$i];
                    $j++;
                }
            }
    
            return $j;
        }
    }

$removeDuplicates = new Solution();

$nums1 = [1, 1, 1, 2, 2, 3];
$k1 = $removeDuplicates->removeDuplicates($nums1);
echo "k = $k1, nums = [" . implode(", ", array_slice($nums1, 0, $k1)) . "]\n";

$nums2 = [0, 0, 1, 1, 1, 1, 2, 3, 3];
$k2 = $removeDuplicates->removeDuplicates($nums2);
echo "k = $k2, nums = [" . implode(", ", array_slice($nums2, 0, $k2)) . "]\n";
