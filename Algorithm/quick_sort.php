<?php
// YOUTUBE: https://www.youtube.com/watch?v=WprjBK0p6rw
/*
function quickSort(arr, low, high)
    if low < high
        pivotIndex = partition(arr, low, high)
        quickSort(arr, low, pivotIndex - 1)  // Recursively sort the left subarray
        quickSort(arr, pivotIndex + 1, high) // Recursively sort the right subarray

function partition(arr, low, high)
    pivot = arr[high]    // Select the rightmost element as pivot
    i = low - 1          // Index of smaller element
    j = low              // Starting index for comparison

    while j <= high - 1
        if arr[j] <= pivot
            i = i + 1
            if i < j
                swap arr[i] with arr[j]
            else
                # This case happens when i == j, no swap needed
                pass

        j = j + 1

    swap arr[i + 1] with arr[high]
    return (i + 1)

*/

function quickSort(&$arr, $low, $high) {
    if ($low < $high) {
        $pivotIndex = partition($arr, $low, $high);
        quickSort($arr, $low, $pivotIndex - 1);  // Recursively sort the left subarray
        quickSort($arr, $pivotIndex + 1, $high); // Recursively sort the right subarray
    }
}

function partition(&$arr, $low, $high) {
    $pivot = $arr[$high];    // Select the rightmost element as pivot
    $i = $low - 1;           // Index of smaller element

    for ($j = $low; $j <= $high - 1; $j++) {
        if ($arr[$j] <= $pivot) {
            $i++;
            if ($i < $j) {
                swap($arr, $i, $j);
            }
        }
    }

    swap($arr, $i + 1, $high);
    return ($i + 1);
}

function swap(&$arr, $a, $b) {
    $temp = $arr[$a];
    $arr[$a] = $arr[$b];
    $arr[$b] = $temp;
}

// Example usage
$arr = [1, 4, 8, 3, 6, 9, 5, 2];
$low = 0;
$high = count($arr) - 1;

quickSort($arr, $low, $high);

echo "Sorted array: ";
print_r($arr);
