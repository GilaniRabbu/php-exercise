<?php
// Exercise - 14
// Write a PHP script to get the filename component of the following path.

// Solution
$path = "www.example.com/public_html/index.php";

// Extract the filename from the path using the basename() function
// The second argument ".php" specifies the suffix to be removed from the filename
$file = basename($path, ".php");

echo $file;
?>