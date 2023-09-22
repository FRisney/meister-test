<?php
$input = '1';
while (true) {
    $input = readline('multiplication for ');
    $input = intval($input);
    if (empty($input) || !is_numeric($input) || $input > 10) {
        break;
    }
    foreach (range(1, 10) as $number) {
        echo str_pad($number, 2, ' ', STR_PAD_LEFT) .
            ' x ' .
            str_pad($input, 2, ' ', STR_PAD_LEFT) .
            ' = ' .
            str_pad($number * $input, 2, ' ', STR_PAD_LEFT) .
            "\n";
    }
}
