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
