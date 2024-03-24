<?php
// Exercise - 6
// Write a PHP script to extract the file name from the following string.
// Sample String : "www.example.com/public/index.php";
// Expected Output : "index.php";

// Solution
// Assigns a string containing a file path to the variable $path
$path = "www.example.com/public/index.php";

// Finds the last occurrence of "/" in $path and extracts the substring after it
$file_name = substr(strrchr($path, "/"), 1);

echo $file_name . "\n";
?>