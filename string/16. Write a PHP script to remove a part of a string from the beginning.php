<?php
// Exercise - 16
// Write a PHP script to remove a part of a string from the beginning.

// Solution
$str = "bay@example.com";
$sub_str = "bay@";

if (substr($str, 0, strlen($sub_str)) == $sub_str) {
    // Check if the substring matches the beginning of the string.
    $str = substr($str, strlen($sub_str));
    // If it matches, remove the substring from the beginning of the string.
}
echo $str;
?>