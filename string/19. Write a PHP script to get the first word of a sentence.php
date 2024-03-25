<?php
// Exercise - 19
// Write a PHP script to get the first word of a sentence.

// Solution
$str = "The quick brown fox";
$arr = explode(" ", trim($str));
echo $arr[0];
?>