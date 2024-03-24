<?php
// Exercise - 8
// Write a PHP script to get the last three characters of a string.
// Sample String : "bay@example.com";

// Solution
// Assigns an email address to the variable $str
$str = "bay@example.com";

// Extracts the last 3 characters from $str and echoes them
echo substr($str, -3);
?>