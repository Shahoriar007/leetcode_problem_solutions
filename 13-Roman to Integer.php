<?php

class Solution {
    function romanToInt($s) {
        $map = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];

        $result = 0;
        $sLength = strlen($s);

        for ($i = 0; $i < $sLength; $i++) {
            if ($i < $sLength - 1 && $map[$s[$i]] < $map[$s[$i + 1]]) {
                $result -= $map[$s[$i]];
            } else {
                $result += $map[$s[$i]];
            }
        }

        return $result;
    }
}

// Example usage:
$solution = new Solution();
echo $solution->romanToInt("III"); // Outputs: 3
echo $solution->romanToInt("LVIII"); // Outputs: 58
echo $solution->romanToInt("MCMXCIV"); // Outputs: 1994
?>
