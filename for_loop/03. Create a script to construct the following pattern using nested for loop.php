<?php
// Exercise - 3
// Create a script to construct the following pattern, using nested for loop.

// Solution
// Outer loop to control the rows
for ($i = 1; $i <= 5; $i++) {
    // Inner loop to control the columns within each row
    for ($j = 1; $j <= $i; $j++) {
        // Print a star for each column
        echo "*";

        // Add a space after each star, except for the last one in the row
        if ($j < $i) {
            echo " ";
        }
    }
    // Move to the next line after printing each row
    echo "\n";
}

/*
Output:
*
* *
* * *
* * * *
* * * * *
*/
?>