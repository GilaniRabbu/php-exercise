<?php
// Exercise - 24
// Write a PHP script to print letters from "a" to "z".

// Solution
// Loop through ASCII values of lowercase letters from "a" to "z".
for ($i = ord("a"); $i <= ord("z"); $i++) {
    // Convert ASCII value to corresponding character and echo.
    echo chr($i);
}
?>