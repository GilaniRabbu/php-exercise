<?php
$name = "Tr Gilani";
$city = "dhaka";

# Length
echo strlen($name) . "\n";

# Word Count
echo str_word_count($name) . "\n";

# Search For Text Within a String
echo strpos($name, "Gilani") . "\n";

# Upper Case
echo strtoupper($name) . "\n";

# Lower Case
echo strtolower($name) . "\n";

# Capitalize
echo ucfirst($city) . "\n";

# Reverse a String
echo strrev($name) . "\n";

# Replace String
echo str_replace("Tr", "MD", $name) . "\n";

# Convert String into Array
$place = "Eastern United Front";
$con = explode(" ", $place);
print_r($con);

# Slicing Strings
$txt = "Hello World";
echo substr($txt, 6, 5) . "\n"; # World
echo substr($txt, -5, 3) . "\n"; # Wor

# Escape Character
$newTxt = "We are the so-called \"Vikings\" from the north.";
echo $newTxt;
?>