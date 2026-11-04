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
echo "<br />";

// number comparison
$num1 = 20;
$num2 = 40;

if ($num1 > $num2) {
    echo "$num1 is greater than $num2.";
} elseif ($num1 < $num2) {
    echo "$num2 is greater than $num1.";
} else {
    echo "$num1 and $num2 are equal.";
}
