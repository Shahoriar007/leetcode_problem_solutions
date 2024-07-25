<!-- https://leetcode.com/problems/richest-customer-wealth/ -->
<?php

$accounts = [[1,2,3],[3,2,1]];

$maxTotal = 0;

foreach($accounts as $account) {
    $total = 0; 
    // var_dump($account);
    // print_r($account);
    foreach($account as $money) {
        $total += $money; 
    }

    if($maxTotal < $total) {
        $maxTotal = $total;
    }
}

echo $maxTotal;
?>