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

echo $number . "\n";
echo $number2 . "\n";
echo $number3 . "\n";


$num = 15;
$num++; // $num += 1; $num = $num + 1; // Post-increment
// ++$num; // Output - 16 // Pre-increment
echo $num . "\n";


// Assign multiple variables in one line
$num1 = $num2 = 5;
echo $num1, "\n", $num2, "\n";


$n = 7;
$m = $n++;
echo $m, "\n", $n, "\n"; // 7 8
/*
$m = $n++;
$m = $n;
$n = $n + 1;
*/


$m = ++$n;
echo $m, "\n", $n, "\n"; // 8 8
/*
$m = ++$n;
$n = $n + 1;
$m = $n;
*/


$txt1 = "Hello";
$txt2 = " World!";
echo $txt1 . $txt2 . "\n"; // Hello World!


// Comparison Operators
$Num1 = 50;
$Num2 = "50";

if ($Num1 == $Num2) {
    echo "true";
} else {
    echo "false";
}
// Output: true;
echo "\n";


if ($Num1 === $Num2) {
    echo "true";
} else {
    echo "false";
}
// Output: false;
echo "\n";


if ($Num1 != $Num2) {
    echo "true";
} else {
    echo "false";
}
// Output: false;
echo "\n";


if ($Num1 !== $Num2) {
    echo "true";
} else {
    echo "false";
}
// Output: true;
?>