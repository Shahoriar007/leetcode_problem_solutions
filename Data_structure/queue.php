<?php

$queue = [];

for ($i = 0; $i < 10; $i++) {
    $queue[] = $number = rand(0, 50);
    echo "$number ";
}

echo "\n";
//just print the array
for ($i = 0; $i < 10; $i++) {
    echo ($queue[$i]) . " ";
}

echo "\n";

//empty the array
while (!empty($queue)){
    echo array_shift($queue) . " ";
}


