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

echo "<br />";

// age classification
$age = 40;

if ($age >= 100) {
    echo "You are ancient.";
} elseif ($age >= 40) {
    echo "You are an adult (old).";
} elseif ($age >= 18) {
    echo "You are an adult (young).";
} elseif ($age >= 14) {
    echo "You are a teenager.";
} elseif ($age >= 0) {
    echo "You are a child.";
} else {
    echo "Sadly, you do not exist yet.";
}
echo "<br />";

// Grade calculation
$bangla = 100;
$english = 950;
$math = 750;

$avg = ($bangla + $english + $math) / 3;

if ($avg > 100) {
    echo "Grade: Math Error!";
} elseif ($avg >= 80 && $avg <= 100) {
    echo "Grade: A+";
} elseif ($avg >= 70 && $avg < 80) {
    echo "Grade: A";
} elseif ($avg >= 60 && $avg < 70) {
    echo "Grade: A-";
} elseif ($avg >= 50 && $avg < 60) {
    echo "Grade: B";
} elseif ($avg >= 40 && $avg < 50) {
    echo "Grade: C";
} elseif ($avg >= 33 && $avg < 40) {
    echo "Grade: D";
} else {
    echo "Grade: F";
    echo "<br />";
    echo "Yes, You have failed. Study more next time.";
}
