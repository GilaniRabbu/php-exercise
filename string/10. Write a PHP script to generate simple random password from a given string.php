<?php
// Exercise - 10
// Write a PHP script to generate simple random password [do not use rand() function] from a given string.
// Sample string : "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
// Note : Password length may be 6, 7, 8 etc;

// Solution
// Define a function named password_generate that takes the number of characters as input
function password_generate($chars)
{
    // Define a string containing all possible characters for the password
    $data = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

    // Shuffle the characters in the string and extract a substring of length $chars
    return substr(str_shuffle($data), 0, $chars);
}

// Call the password_generate function with 7 characters
echo password_generate(7);
?>