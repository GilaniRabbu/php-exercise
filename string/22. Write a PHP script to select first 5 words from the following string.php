<?php
// Exercise - 22
// Write a PHP script to select first 5 words from the following string.

// Solution
$str = "The quick brown fox jumps over the lazy dog";
echo implode(" ", array_slice(explode(" ", $str), 0, 5));
?>