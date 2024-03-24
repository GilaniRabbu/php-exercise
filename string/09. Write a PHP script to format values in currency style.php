<?php
// Exercise - 9
// Write a PHP script to format values in currency style.
// Sample values : value1 = 65.45, value2 = 104.35;
// Expected Result : 169.80;

// Solution
$value1 = 65.45;
$value2 = 104.35;

// Uses sprintf() function to format the sum of $value1 and $value2 with two decimal places
// %1.2f specifies the format: 1 total width, 2 decimal places
// Echoes the formatted sum to the output followed by a newline
echo sprintf("%1.2f", $value1 + $value2);
?>