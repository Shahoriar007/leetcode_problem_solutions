<?php

$sortedArray = [2, 4, 6, 7, 8, 9, 10, 1, 12, 14, 16, 17, 19];

min_heap($sortedArray);

function min_heap(&$sortedArray) {
    $heapArray = []; // Initialize the heap array

    for ($i = 0; $i < count($sortedArray); $i++) {

        if ($i == 0) {
            // Add the first element as the root
            $heapArray[] = $sortedArray[$i];
        } else {
            // Insert the element into the heap
            $heapArray[] = $sortedArray[$i];
            heapifyUp($heapArray, count($heapArray) - 1); // Ensure the min-heap property
        }
    }

    var_dump($heapArray);
}

function heapifyUp(&$heapArray, $index) {
    while ($index > 0) {
        $parentIndex = floor(($index - 1) / 2);

        // If the current node is smaller than its parent, swap them
        if ($heapArray[$index] < $heapArray[$parentIndex]) {
            $temp = $heapArray[$parentIndex];
            $heapArray[$parentIndex] = $heapArray[$index];
            $heapArray[$index] = $temp;

            // Move up to the parent node
            $index = $parentIndex;
        } else {
            break; // If no swap needed, the min-heap property is satisfied
        }
    }
}
