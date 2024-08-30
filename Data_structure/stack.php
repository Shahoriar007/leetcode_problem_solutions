<?php

$stack = [];

// Push 10 random numbers onto the stack and print them
for ($i = 0; $i < 10; $i++) {
    $stack[] = $number = rand(0, 50);
    echo "$number ";
}

echo "\n";

// Pop and print the numbers from the stack
while (!empty($stack)) {
    echo array_pop($stack) . " ";
}

