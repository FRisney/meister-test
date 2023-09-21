<?php

function getLongestName(array $names): string
{
    $maxLength = PHP_INT_MIN;
    foreach($names as $name){
        if ($maxLength < strlen($name)) {
            $maxLength = strlen($name);
            $longestName = $name;
        }
    }
    return $longestName;
}


$names = [
    "Mia Pearson",
    "Gunner Cruz",
    "Claire Collier",
    "Edison Banks",
    "Cali Stephenson",
    "Joe Spencer",
    "Alyssa Underwood",
    "Reece Hancock",
];

echo getLongestName($names) . "\n";
