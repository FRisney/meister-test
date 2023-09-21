<?php

foreach(range(10,1) as $number){
    echo $number;
    if ($number > 1) {
        echo ", "; 
    }
}
echo "\n";
