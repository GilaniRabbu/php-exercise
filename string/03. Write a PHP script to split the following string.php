<?php
// Exercise - 3
// Write a PHP script to split the following string.
// Sample string : '082307';
// Expected Output : 08:23:07;

// Solution
$str = '082307';

// Chunk the string into parts of 2 characters each and insert ':' between them
echo substr(chunk_split($str, 2, ':'), 0, -1) . "\n";
?>