<?php
// Exercise - 4
// Create a script to construct the following pattern, using a nested for loop.

// Solution
// Define the number of rows
$n = 5;

// Loop to print the upper half of the diamond
for ($i = 1; $i <= $n; $i++) {
    // Loop to print the spaces and stars for each row
    for ($j = 1; $j <= $i; $j++) {
        // Print a star surrounded by spaces
        echo " * ";
    }

    // Move to the next line after printing each row
    echo "\n";
}

// Loop to print the lower half of the diamond
for ($i = $n; $i >= 1; $i--) {
    // Loop to print the spaces and stars for each row
    for ($j = 1; $j <= $i; $j++) {
        // Print a star surrounded by spaces
        echo " * ";
    }

    // Move to the next line after printing each row
    echo "\n";
}

/*
Output:
 * 
 *  * 
 *  *  * 
 *  *  *  * 
 *  *  *  *  * 
 *  *  *  *  * 
 *  *  *  * 
 *  *  * 
 *  * 
 * 
*/
?>