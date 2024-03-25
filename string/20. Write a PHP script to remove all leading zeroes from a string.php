<?php
// Exercise - 20
// Write a PHP script to remove all leading zeroes from a string.

// Solution
$num = "0000523564.25";
$str = ltrim($num, "0");
echo $str;
?>