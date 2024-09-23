<?php
function rotateArray(&$nums, $k) {
    $n = count($nums);

    // To avoid unnecessary rotations if k is greater than n
    $k = $k % $n;

    // Step 1: Slice the last k elements and the first n-k elements
    $lastPart = array_slice($nums, -$k);  // Last k elements
    $firstPart = array_slice($nums, 0, $n - $k);  // First n-k elements

    // Step 2: Concatenate both parts and modify the original array
    $nums = array_merge($lastPart, $firstPart);
}

$nums1 = [1, 2, 3, 4, 5, 6, 7];
$k1 = 3;
rotateArray($nums1, $k1);
print_r($nums1);  // Output: [5, 6, 7, 1, 2, 3, 4]

$nums2 = [-1, -100, 3, 99];
$k2 = 2;
rotateArray($nums2, $k2);
print_r($nums2);  // Output: [3, 99, -1, -100]
