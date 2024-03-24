<?php
// Exercise - 4
// Write a PHP script to check whether a string contains a specific string?
// Sample string : "The quick brown fox jumps over the lazy dog.";
// Check whether the said string contains the string "jumps";

// Solution
$str = "The quick brown fox jumps over the lazy dog.";
// Check if the word "jumps" is present in the string
if (strpos($str, "jumps") !== false) {
    // If present, echo a message indicating its presence
    echo "The specific word is present.";
} else {
    // If not present, echo a message indicating its absence
    echo "The specific word is not present.";
}
?>