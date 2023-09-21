<?php

function getMax(array $numbers): int
{
    $max = PHP_INT_MIN;
    foreach($numbers as $number){
        $max = max($max, $number);
    }
    return $max;
}


$numbers = [];
echo '[';
foreach(range(0,9) as $i){
    $numbers[$i] = rand(0,25);
    if ($i > 0) {
        echo ', ';
    }
    echo "$numbers[$i]";
}
echo "]\n";

echo getMax($numbers) . "\n";
