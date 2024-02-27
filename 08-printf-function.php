<?php
$fname = "Murat";
$lname = "Hakim";
$mname = "Nothing";

printf('His name is %3$s %1$s, %2$s', $fname, $mname, $lname); // Argument

echo "\n";

printf('The binary equivalent of %1$d is %1$b', 12);

echo "\n";

$n = 45.126;
printf("%.2f", $n); // 45.13

echo "\n";

$m = 123; // 0123
$n = 27; // 0023

printf("%04d", $m);
printf("%04d", $n);

echo "\n";

$m = 123.3253;
$n = 27.155;

printf("%08.2f", $m); // 00123.33
printf("%08.2f", $n); // 00027.16

// sprintf
$fname = "Murat";
$lname = "Hakim";

$output = sprintf("His name is %s %s", $fname, $lname);

echo $output;
?>