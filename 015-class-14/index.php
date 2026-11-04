<?php

function printThis()
{
    static $a = 0;
    echo $a;
    echo "<br>";
    $a++;
}

printThis();
printThis();
printThis();
printThis();
printThis();

// Area of a triangle
$base = 10;
$height = 50;

echo "For a triangle with base: $base and height: $height, The area is: ". 0.5 * $base * $height;
echo "<br />";

// a + b squared
$aa = 10;
$bb = 20;

echo "The result is: " . ($aa + $bb) ** 2;
