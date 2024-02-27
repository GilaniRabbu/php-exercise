<?php
$age = 14;
if ($age < 16) {
  echo "You're not eligible for vote!";
} else {
  echo "You're eligible for vote!";
}



$num = 12;
if ($num % 2 == 0) {
  echo "$num is an even number";
} else {
  echo "$num is an odd number";
}



$a = 200;
$b = 33;
$c = 500;
if ($a > $b && $a > $c) {
  echo "a is the highest number";
} elseif ($b > $a && $b > $c) {
  echo "b is the highest number";
} else {
  echo "c is the highest number";
}



$x = 5;
if ($x == 2 || $x == 3 || $x == 4 || $x == 5 || $x == 6 || $x == 7) {
  echo "$x is a number between 2 and 7";
}



$age = 14;
if ($age >= 13 && $age <= 19) {
  echo "This person is a teenager";
} else {
  echo "This person is not a teenager";
}



// 1. - Divisible by 4 ?
// 2. - Divisible by 100 ?
// 3. - Divisible by 400 ?
$year = 2010;
if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
  echo "{$year} is a leap year";
} elseif ($year % 4 == 0 && $year % 100 == 0) {
  echo "{$year} is not a leap year";
} elseif ($year % 4 == 0) {
  echo "{$year} is a leap year";
} else {
  echo "{$year} is not a leap year";
}

// Shorthand Complex Condition
if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
  echo "{$year} is a leap year";
} else {
  echo "{$year} is not a leap year";
}



// Nested
$condition1 = true;
$condition2 = false;
$condition3 = true;

if ($condition1) {
  if ($condition2) {
    if ($condition3) {
      echo "Hello";
    } else {
      echo "No 1";
    }
  } else {
    echo "No 2";
  }
} else {
  echo "No 3";
}

if ($condition1 && $condition2 && $condition3) {
  echo "Hello";
} elseif ($condition1 && $condition2) {
  echo "No 1";
} elseif ($condition1) {
  echo "No 2";
} else {
  echo "No 3";
}
?>