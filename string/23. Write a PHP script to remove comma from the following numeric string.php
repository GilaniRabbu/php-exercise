<?php
// Exercise - 23
// Write a PHP script to remove comma(s) from the following numeric string.

// Solution
$num = "2,540.25";

$str = str_replace(",", "", $num);

if (is_numeric($str)) {
    echo $str;
}
?>