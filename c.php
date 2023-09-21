<?php

function isLeapYear(int $year)
{
    return ($year % 4 == 0 && $year % 100 != 0) ||
           ($year % 100 == 0 && $year % 400 == 0);
}

echo (isLeapYear(1900)) ? "Yes\n" : "No\n";
echo (isLeapYear(2000)) ? "Yes\n" : "No\n";
echo (isLeapYear(2012)) ? "Yes\n" : "No\n";
