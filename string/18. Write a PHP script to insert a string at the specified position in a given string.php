<?php
// Exercise - 18
// Write a PHP script to insert a string at the specified position in a given string.

// Solution
$str = "The brown fox";

$string_to_insert = "quick";

$ins_pos = 4;

$new_str = substr_replace($str, $string_to_insert . " ", $ins_pos, 0);

echo $new_str;
?>