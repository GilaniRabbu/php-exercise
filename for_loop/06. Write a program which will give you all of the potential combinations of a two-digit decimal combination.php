<?php
// Exercise - 6
// Write a program which will give you all of the potential combinations of a two-digit decimal combination, printed in a comma delimited format.

// Solution
// Outer loop for iterating over values of $a from 0 to 9
for ($i = 0; $i < 10; $i++) {
    // Inner loop for iterating over values of $b from 0 to 9
    for ($j = 0; $j < 10; $j++) {
        // Print the concatenated values of $a and $b followed by a comma and space
        echo $i . $j . ", ";
    }
}

// Output: 00, 01, 02, 03, 04, 05, 06, 07, 08, 09, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99,
?>