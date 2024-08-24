<?php 

$graph = [
    'A' => ['B', 'C'],
    'B' => ['A', 'C'],
    'C' => ['A', 'B', 'D'],
    'D' => ['C', 'E'],
    'E' => ['D']
];

function dfs($graph, $start, &$visited = [])
{
    // Mark the start node as visited
    $visited[$start] = true;
    
    // Print or process the node
    echo $start . "\n";

    $key = $start;

    foreach ($graph[$key] as $value) {
        echo "Next: ";
        echo $value."\n";
        if (!isset($visited[$value])) {
            echo "Not Visited: ";
            echo $value."\n";
            dfs($graph, $value, $visited);
        }
    }

}


$visited = [];
dfs($graph, 'A', $visited);