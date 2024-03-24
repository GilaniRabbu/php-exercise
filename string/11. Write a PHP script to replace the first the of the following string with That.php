<?php
// Exercise - 11
// Write a PHP script to replace the first "the" of the following string with "That".
// Sample date: "the quick brown fox jumps over the lazy dog.";

// Solution
$str = "the quick brown fox jumps over the lazy dog.";

// Use preg_replace function to replace the first occurrence of the word "the" with "That" in the string.
// The pattern "/the/" is a regular expression pattern matching the word "the".
// The "1" parameter specifies that only the first occurrence of "the" should be replaced.
echo preg_replace("/the/", "That", $str, 1);
?>