<?php

function getArraySum(array $numbers): int
{
    $sum = 0;
    foreach($numbers as $number){
        $sum += $number;
    }
    return $sum;
}

$numbers = [];
echo '[';
foreach(range(0,99) as $i){
    $numbers[$i] = rand(0,999);
    if ($i > 0) {
        echo ', ';
    }
    echo "$numbers[$i]";
}
echo "]\n";

echo getArraySum($numbers) . "\n";
echo array_sum($numbers) . "\n";

