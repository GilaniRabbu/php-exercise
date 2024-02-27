<?php
$a = 5;
$b = 15.75;
$c = "250";

printf("We're start counting from %u to %s", $a, $b);
echo "<br>";

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);

echo "<br>";

// Cast float to int
$x = 23465.768;
$int_cast = (int) $x;
echo $int_cast; // 23465

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int) $x;
echo $int_cast; // 23465

printf("The binary equivalent of %d is %b", 1212, 1212);
printf("The hexadecimal equivalent of %d is %X", 1212, 1212);
printf("The octal equivalent of %d is %o", 27, 27);

printf("The octal equivalent of %d is %o", 65536, 65536);
printf("Octal %o = %d", 020000, 020000);
?>