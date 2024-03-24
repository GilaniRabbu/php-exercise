<?php
// Exercise - 5
// Write a PHP script to convert the value of a PHP variable to string.

// Solution
// Assigns the integer value 25 to the variable $num
$num = 25;

// Converts the integer $num to a string and assigns it to $str
$str = (string) $num;
var_dump($str);

// Check whether $num and $str are equal or not
if ($num === $str) {
    echo "They are the same" . "\n";
} else {
    echo "They are not same" . "\n";
}
?>