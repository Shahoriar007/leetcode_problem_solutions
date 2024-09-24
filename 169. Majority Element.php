<?php 



function majorityElement($nums) {

    $arraySize = count($nums);

    sort($nums);

    return $nums[floor($arraySize / 2)];

    
}

$nums = [2,2,1,1,1,2,2];

$k = majorityElement($nums);

var_dump($k);