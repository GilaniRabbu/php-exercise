<?php
// Exercise - 5
// Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number, so the factorial of 4 is 4*3*2*1= 24.

// Solution
// Set the value of n to 4
$n = 4;

// Initialize variable sum to store the factorial value
$sum = 1;

// Loop to calculate the factorial of n
for ($i = 1; $i <= $n - 1; $i++) {
    $sum *= ($i + 1);
}

// Print the factorial of n
echo "The factorial of $n = $sum" . "\n";

// Output: The factorial of 4 = 24
?>