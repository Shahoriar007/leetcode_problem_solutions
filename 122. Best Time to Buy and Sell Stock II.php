<?php 

function maxProfit(&$prices) {

        $profit = 0;
        $c = count($prices);

        for ($i = 0; $i < $c; $i++) {

            if ($prices[$i] < $prices[$i+1]) {
                $profit += ($prices[$i+1] - $prices[$i]); 
            }
        }

        return $profit;
}

$prices = [7, 1, 3, 5, 9, 2, 1, 7, 10];

$profit = maxProfit($prices);

echo($profit);