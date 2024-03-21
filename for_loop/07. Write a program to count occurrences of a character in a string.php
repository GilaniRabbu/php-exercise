<?php
// Exercise - 7
// Write a program which will count the "a" characters in the text "Eastern Standard Time".

// Solution
// Define the title string to search within
$title = "Eastern Standard Time";

// Define the character to search for
$search_char = "a";

// Initialize a counter variable to count occurrences
$count = "0";

// Loop through each character in the text string
for ($i = "0"; $i < strlen($title); $i++) {
    // Check if the current character matches the search character
    if (substr($title, $i, 1) == $search_char) {
        // Increment the counter if there's a match
        $count += 1;
    }
}

// Print the count of occurrences of the search character
echo $count;

// Output: 3
?>