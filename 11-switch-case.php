<?php
$n = 16;
$r = $n % 2;

switch ($r) {
  case 0:
    echo "{$n} is an even number";
    break;
  default:
    echo "{$n} is an odd number";
}

echo "\n";

// Nested
switch ($r) {
  case 0:
    switch ($n) {
      case $n > 0:
        echo "$n is a positive even number";
        break;
      case $n < 0:
        echo "$n is a negative even number";
        break;
    }
    break;
  default:
    switch ($n) {
      case $n > 0:
        echo "$n is a positive odd number";
        break;
      case $n < 0:
        echo "$n is a negative odd number";
        break;
    }
}

echo "\n";

switch (true) {
  case(0 == $r && $n > 0):
    echo "$n is a positive even number";
    break;
  case(1 == $r && $n > 0):
    echo "$n is a positive odd number";
    break;
  case(0 == $r && $n < 0):
    echo "$n is a negative even number";
    break;
  case(-1 == $r && $n < 0):
    echo "$n is a negative odd number";
    break;
}

echo "\n";

$string = "8balls";
switch ($string) {
  case "9balls":
    echo "Nine Balls";
    break;
  case 8:
    echo "8";
    break;
  case "8balls":
    echo "Eight Balls";
    break;
}

echo "\n";

$color = "red";

switch ($color) {
  case "red":
    echo ucwords($color) . " is our favorite color";
    break;
  case "blue":
    echo ucwords($color) . " is our favorite color";
    break;
  case "green":
    echo ucwords($color) . " is our favorite color";
    break;
  default:
    echo "This color is ok";
}

echo "\n";

// If you want multiple cases to use the same code block, you can specify the cases like this:

$day = 3;

switch ($day) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:
    echo "The week feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekends are the best!";
    break;
  default:
    echo "Something went wrong";
}
?>