<?php

function merge(&$nums1, $m, $nums2, $n) {
    for($i = 0; $i < $n; $i++) {
        $number = $nums2[$i];

        for($j = 0; $j < $m; $j++) {
            if($nums1[$j] == $number) {
                $nums1[$j] = $number;
            }elseif ($nums2[$j] > $number) {
                $nums2[$j] = $number;
            }
        }


    }

}


$nums1 = [1,2,3,0,0,0];
$m = 3;
$nums2 = [2,5,6];
$n = 3;

merge($nums1, $m, $nums2, $n);


