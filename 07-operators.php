<?php
// $number = 12 + 3; // operand operator

$number = 12;
// $number = $number + 13;
// $number += 13;

$number2 = $number - 20; // -8

$number = 12 * 2; // 24
$number = 12 / 2; // 6
$number = 12 % 2; // 0

$number3 = (13 - 5) * 6; // 48
$number3 = (24 - 4) / (7 - 2); // 4

echo $number;
echo $number2;
echo $number3;

$num = 15;
$num++; // $num += 1; $num = $num + 1; // Post-increment
// ++$num; // Output - 16 // Pre-increment
echo $num;

// Assign multiple variables in one line
$num1 = $num2 = 5;
echo $num1, "\n", $num2;

$n = 7;
$m = $n++;
echo $m, "\n", $n; // 7 8
/*
$m = $n++;
$m = $n;
$n = $n + 1;
*/

$m = ++$n;
echo $m, "\n", $n; // 8 8
/*
$m = ++$n;
$n = $n + 1;
$m = $n;
*/

$txt1 = "Hello";
$txt2 = " World!";
echo $txt1 . $txt2; // Hello World!
?>
