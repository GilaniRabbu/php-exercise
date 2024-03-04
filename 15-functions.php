<?php
function myMessage()
{
  echo "Hello world!";
}
myMessage();


echo PHP_EOL;


function Name($fname, $lname, $year)
{
  echo $fname . " " . $lname . ". Born in " . $year . "\n";
}
Name("Murat", "Hakim", 1982);
Name("John", "Doe", 1992);


echo PHP_EOL;


function setHeight($minHeight = 65)
{
  echo "The height is : $minHeight" . "\n";
}
setHeight(90);
setHeight(); // will use the default value of 65
setHeight(75);


echo PHP_EOL;


function Sum($x, $y)
{
  $z = $x + $y;
  return $z . "\n";
}
echo "5 + 10 = " . Sum(5, 10);
echo "7 + 13 = " . Sum(7, 13);
echo "2 + 14 = " . Sum(2, 14);


echo PHP_EOL;


// Factorial
function factorial($n)
{
  if ($n <= 1) {
    return 1;
  }
  return $n * factorial($n - 1);
}
echo factorial(5); // 120


echo PHP_EOL;


// Recursive function // Recursion
function printN($i)
{
  if ($i >= 10) {
    return;
  }
  echo $i;
  echo PHP_EOL;
  $i++;
  printN($i);
}
printN(1);


function printNumber($counter, $end, $stepping = 1)
{
  if ($counter > $end) {
    return;
  }
  echo $counter;
  echo PHP_EOL;
  $counter += $stepping;
  printNumber($counter, $end, $stepping);
}
printNumber(21, 37, 2);


echo PHP_EOL;


function _sum(int $x, int $y, int $z)
{
  return $x + $y + $z;
}
echo _sum("3", 12, 5); // 20
// echo sum("c", 12, 5); // Fatal error
?>