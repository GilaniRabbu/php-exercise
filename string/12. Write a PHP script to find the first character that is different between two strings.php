<?php
// Exercise - 12
// Write a PHP script to find the first character that is different between two strings.

// Solution
$str1 = "Football";
$str2 = "football";

// Calculate the position of the first difference between the two strings
$str_pos = strspn($str1 ^ $str2, "\0");

// Output the position of the first difference along with the characters at that position
printf(
    "First difference between two strings at position %d: '%s' vs '%s'",
    $str_pos,
    $str1[$str_pos],
    $str2[$str_pos]
);
?>