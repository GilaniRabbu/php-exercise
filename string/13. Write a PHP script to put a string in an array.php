<?php
// Exercise - 13
// Write a PHP script to put a string in an array.

// Solution
$str = "Twinkle, twinkle, little star,<br> How I wonder what you are.<br> Up above the world so high,<br> Like a diamond in the sky.";

// Explode the multi-line string into an array using "" as the delimiter
$arr = explode("<br>", $str);

// Display the array containing the lines of the song
var_dump($arr);
?>