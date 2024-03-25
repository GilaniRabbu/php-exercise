<?php
// Exercise - 21
// Write a PHP script to remove trailing slash from a string.

// Solution
$str = "The quick brown fox jumps over the lazy dog///";
echo rtrim($str, "/");
?>