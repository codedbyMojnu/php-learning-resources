<?php

define('i', null);

for ($i = 0; $i < 11; $i++) {
    echo $i;
}

echo "<br>";

// Problem 1: Convert a decimal number to binary number

$num = 21;

while ($num != 0) {
    $vagsesh =  $num % 2;
    echo $vagsesh;
    $num = floor($num / 2);
}

echo "<br>";

// Problem 2: Triangle *

/* 

*
**
***
****
*****
*/



for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
