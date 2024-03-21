<?php
// Exercise - 12
// Write a PHP program to generate and display the first n lines of a Floyd triangle. (use n=5 and n=11 rows).

/*
According to Wikipedia Floyd's triangle is a right-angled triangular array
of natural numbers, used in computer science education.
It is named after Robert Floyd. It is defined by filling the rows of the triangle
with consecutive numbers, starting with a 1 in the top left corner.
*/

// Solution
// Initialize the value of n
$n = 5;

// Print the value of n
// echo "n = " . $n . "\n";

// Initialize a counter variable
$count = 1;

// Outer loop for rows
for ($i = $n; $i > 0; $i--) {
    // Inner loop for columns
    for ($j = $i; $j < $n + 1; $j++) {
        // Print the count with 4-character width
        printf("%4s", $count);

        // Increment the count
        $count++;
    }

    // Move to the next line after each row
    echo "\n";
}
?>