<?php
// Exercise - 7
// Write a PHP script to extract the user name from the following email ID.
// Sample String : "bay@example.com";
// Expected Output : "bay";

// Solution
$mailId = "bay@example.com";

// Finds the first occurrence of '@' in $mailId and returns the substring before it
$user = strstr($mailId, "@", true);

echo $user . "\n";
?>