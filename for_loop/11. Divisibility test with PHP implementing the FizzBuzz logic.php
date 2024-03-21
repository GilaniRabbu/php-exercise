<?php
// Exercise - 11
// Write a PHP program which iterates the integers from 1 to 100. For multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz". For numbers which are multiples of both three and five print "FizzBuzz".

// Solution
// Loop through numbers from 1 to 100
for ($i = 1; $i <= 60; $i++) {
    // Check if the number is divisible by both 3 and 5
    if ($i % 3 == 0 && $i % 5 == 0) {
        // Print FizzBuzz if divisible by both 3 and 5
        echo $i . " FizzBuzz" . "\n";
    }

    // Check if the number is divisible by 3 only
    else if ($i % 3 == 0) {
        // Print Fizz if divisible by 3 only
        echo $i . " Fizz" . "\n";
    }

    // Check if the number is divisible by 5 only
    else if ($i % 5 == 0) {
        // Print Buzz if divisible by 5 only
        echo $i . " Buzz" . "\n";
    }

    // If the number is not divisible by 3 or 5
    else {
        // Print the number itself
        echo $i . "\n";
    }
}
?>