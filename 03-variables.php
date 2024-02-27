<?php
$task = "Read";
echo $task; // Read
echo "\n";

// Change Variables Value
$task = "Write";
echo $task; // Write
echo "\n";

// Constants
define("Age", 35); // Can't be redefined
echo "My age is " . Age; // My age is 35
echo "\n";
echo constant("Age"); // 35
echo "\n";

$constant = "constant";
echo "I am {$constant('Age')} years old."; // I am 35 years old.
?>