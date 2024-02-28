<?php
$num = 10;

if ($num == 11) {
  print("Number Eleven");
} elseif ($num == 10) {
  print("Number Ten");
} else {
  print("A Number");
}

echo "\n";

// $number = ($num == 10) ? "Number Ten" : "A Number";
$number = $num == 12 ? "Number Twelve" : ($num == 10 ? "Number Ten" : "A Number");
echo $number;

echo "\n";

// Find the Even Number
$even = ($num % 2 == 0) ? "Even Number" : "Odd Number";
echo $even;
?>