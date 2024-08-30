<?php

$queue = [];

for ($i = 0; $i < 10; $i++) {
    $queue[] = $number = rand(0, 50);
    echo "$number ";
}

echo "\n";

for ($i = 0; $i < 10; $i++) {
    echo ($queue[$i]) . " ";
}

echo "\n";


while (!empty($queue)){
    echo array_shift($queue) . " ";
}


