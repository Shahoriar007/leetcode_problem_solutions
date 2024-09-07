<?php 

$graph = [
    'A' => ['B', 'C'],
    'B' => ['A', 'C'],
    'C' => ['A', 'B', 'D'],
    'D' => ['C', 'E'],
    'E' => ['D']
];

function bfs($graph, $startNode) {
    $visited = [];
    $queue = [];

    // Mark the start node as visited and enqueue it
    $visited[$startNode] = true;
    array_push($queue, $startNode);

    while (!empty($queue)) {
        // Dequeue a vertex from the queue
        $node = array_shift($queue);
        echo $node . " ";

        // Get all adjacent vertices of the dequeued node
        foreach ($graph[$node] as $neighbor) {
            // If the neighbor has not been visited, mark it as visited and enqueue it
            if (!isset($visited[$neighbor])) {
                $visited[$neighbor] = true;
                array_push($queue, $neighbor);
            }
        }
    }
}

bfs($graph, 'A');