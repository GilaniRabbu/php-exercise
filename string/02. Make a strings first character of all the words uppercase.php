<?php
// Exercise - 2
// Make a string's first character uppercase.
// Make a string's first character of all the words uppercase.

// Solution
$city = "dhaka";
$paragraph = "Lorem ipsum dolor sit ame con sec audio elite quae ten ame an.";

// Make the first character uppercase
echo ucfirst($city) . "\n";

// Make the first character of each word uppercase
echo ucwords($paragraph);
?>