<?php

$sortedArray = [2, 4, 6, 7, 8, 9, 10, 11, 12, 14, 16, 17, 19];
$find = 17;

$index = binary_search($sortedArray, $find, 0, count($sortedArray) - 1);

echo "\nIndex of element $find is: " . $index;

function binary_search($sortedArray, $find, $low, $high) {
    if ($low > $high) {
        return -1; // Element not found
    }

    // Calculate the middle index
    $middle = floor(($low + $high) / 2);

    // Check if the middle element is the one we're looking for
    if ($sortedArray[$middle] == $find) {
        return $middle;
    }

    // If the element is smaller, it must be in the left half
    if ($find < $sortedArray[$middle]) {
        return binary_search($sortedArray, $find, $low, $middle - 1);
    }

    // Otherwise, it's in the right half
    return binary_search($sortedArray, $find, $middle + 1, $high);
}
