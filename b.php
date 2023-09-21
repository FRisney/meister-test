<?php

function isPalindrome(string $word)
{
    $chars = ceil(strlen($word) / 2);
    for ($i = 0; $i < $chars; $i++) {
        $mirroredCharIndex = strlen($word) - $i - 1;
        if ($word[$i] != $word[$mirroredCharIndex]) {
            return false;
        }
    }
    return true;
}

echo (isPalindrome("madam")) ? "Yes\n" : "No\n";
echo (isPalindrome("civic")) ? "Yes\n" : "No\n";
