<?php
// Exercise - 15
// Write a PHP script to print the next character of a specific character.

// Solution
$char = "a";
$next_char = ++$char;

// The following if condition prevent you to go beyond "z" or "Z" and will reset to "a" or "A".
if (strlen($next_char) > 1) {
    $next_char = $next_char[0];
}
echo $next_char;
?>