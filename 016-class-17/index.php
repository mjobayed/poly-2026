<?php

$text = "simple text";
echo "Character count: " . strlen($text);

echo "<br />";

$sentence = "This is a simple sentence";
echo "Word count: " . str_word_count($sentence);

echo "<br />";

$new = str_replace("simple", "complex", $text);
echo $new;

echo "<br />";

echo strtoupper($new);

echo "<br />";

echo strtolower($sentence);

echo "<br />";

var_dump($new);

echo "<br />";

$colors = ["Red", "Blue", "Green"];

var_dump($colors);

echo "<br />";

$person = [
    "first_name" => "John",
    "last_name" => "Doe"
];

echo $person["first_name"];

echo "<br />";

$contacts = [
    ["A", 1],
    ["B", 2],
    ["C", 3]
];

echo $contacts[2][1];

echo "<br />";

// loop
$i = 1;
while ($i <= 10) {
    echo "$i ";
    $i++;
}

echo "<br />";

// loop
for ($i = 0; $i <= 10; $i++) {
    echo "$i ";
}
