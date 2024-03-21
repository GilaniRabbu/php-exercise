<?php
// Exercise - 2
// Create a script using a for loop to add all the integers between 0 and 30 and display the sum.

// Solution
// Initialize sum variable
$sum = 0;

// Loop through numbers from 1 to 30
for ($i = 1; $i <= 30; $i++) {
    $sum += $i;
}

// Print the sum of numbers from 1 to 30
echo "The sum of the numbers 0 to 30 is $sum" . "\n";

// Output: The sum of the numbers 0 to 30 is 465
?>