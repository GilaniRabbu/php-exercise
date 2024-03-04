<?php
// For Loop
for ($i = 0; $i <= 10; $i++) {
  echo $i;
  echo PHP_EOL;
}

for ($i = 0; $i <= 10; $i++) {
  echo PHP_EOL;
  for ($j = 0; $j < $i; $j++) {
    echo "*";
  }
}

echo PHP_EOL;

// While Loop
$i = 0;
while ($i < 10) {
  $i++;
  echo $i . PHP_EOL;
}

echo PHP_EOL;

// Do While Loop
$i = 0;
do {
  $i++;
  echo $i . PHP_EOL;
} while ($i < 10);

echo "Go To";
echo PHP_EOL;

$i = 0;
a: $i++;
echo $i . PHP_EOL;
if ($i < 7) goto a;

// ForEach Loop
$season = array("Winter", "Spring", "Summer", "Fall");
foreach ($season as $i) {
  echo $i . "\n";
}

// Dynamic Array
foreach (array('L', 'E', 'A', 'R', 'N', '-', 'P', 'H', 'P') as $element) {
  echo $element;
}

echo PHP_EOL;

// Multi-dimensional Array
// Declare multi-dimensional array
$arr = array();
$arr[0][0] = "John ";
$arr[0][1] = "Doe ";
$arr[1][0] = "Colt ";
$arr[1][1] = "Max";

// Display multi-dimensional array elements through foreach loop
foreach ($arr as $i) {
  foreach ($i as $name) {
    echo $name;
  }
}
?>