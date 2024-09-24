<?php 

function maxProfit(&$prices) {

        $j = 0;
        $profit = 0;

        for ($i = 1; $i < count($prices); $i++) {

            if ($prices[$j] < $prices[$i]) {
                $profit = max($profit, ($prices[$i] - $prices[$j]));
            } else {
                $j = $i;
            }
        }

        return $profit;
}

$prices = [1,2,4,2,5,7,2,4,9,0,9];

$profit = maxProfit($prices);

echo($profit);