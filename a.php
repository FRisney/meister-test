<?php

function isPrime(int $number)
{
    for ($counter = $number - 1; $counter > 1; $counter--) {
        if ($number % $counter == 0) {
            return false;
        }
    }
    return true;
}

echo "Insert 0 to exit\n";
while ($input > 0) {
    $input = readline('number: ');
    $input = intval($input);

    echo (isPrime($input)) ? "Yes\n" : "No\n";
}
