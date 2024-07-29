<?php

$arr = [1, 4, 8, 3, 6, 9, 5, 2];

function margeSort($arr){

    $n = count($arr);

    if( $n < 2 ){
        return $arr;
    }

    $middle = intdiv($n, 2);

    $firstHalf = array_slice($arr, 0, $middle);
    $secondHalf = array_slice($arr, $middle);
    

    $firstHalf = margeSort($firstHalf);
    $secondHalf = margeSort($secondHalf);

    return marge($firstHalf, $secondHalf);

}

function marge($left, $right){
    $result = [];
    $i = 0;
    $j = 0;

    while ($i < count($left) && $j < count($right)) {
        if ($left[$i] <= $right[$j]) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    while ($i < count($left)) {
        $result[] = $left[$i];
        $i++;
    }

    while ($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;

}

$output = margeSort($arr);

print_r($output);