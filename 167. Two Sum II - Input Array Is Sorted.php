<?php

// 1st solution
// function twoSum($numbers, $target){

//     $size = count($numbers);
//     $ansArray = [];

//     for ($i = 0; $i < $size; $i++){

//         for ($j = $i+1; $j < $size; $j++){

//             if($numbers[$i] + $numbers[$j] == $target){
                
//                 $ansArray[0] = $numbers[$i];
//                 $ansArray[1] = $numbers[$j];

//                 return $ansArray;
//             }
//         }
//     }

// }

// @2nd solution
function twoSum($numbers, $target) {
    $size = count($numbers);
    $left = 0;
    $right = $size - 1;

    while ($left < $right) {
        $sum = $numbers[$left] + $numbers[$right];

        if ($sum == $target) {
            // return [$numbers[$left], $numbers[$right]];  
            return [$left+1, $right+1];
        } elseif ($sum < $target) {
            $left++;
        } else {
            $right--;
        }
    }

    return [];
}

$numbers = [2,7,11,15];
$target = 9;

$solve = twoSum($numbers, $target);

if (!empty($solve)) {
    print_r($solve);
} else {
    echo "No solution found.\n";
}

/*
#B.F. 0(n^2) 
#first and slow pointers (two pointers)

numbers = [2,7,11,15];
target = 9;


for (i=0; i < sigeOfArray; i++){

    for (j=i+1; j < sigeOfArray; j++){

        if(numbers[i] + numbers[j] == target){

            ansArray[0] = numbers[i];
            ansArray[1] = numbers[j];

            return ansArray
        }
    }
}

#######################################################################
#start and ending pointers

numbers = [2,7,11,15];
target = 9;
size = size of numbers

left = 0;
right = size - 1;

    while (left < right) {
        sum = numbers[left] + numbers[right];

        if (sum == target) {
            return [left+1, right+1];
        } elseif (sum < target) {
            left++;
        } else {
            right--;
        }
    }

    return [];


*/




