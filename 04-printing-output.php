<?php
echo "<h2>Hello World</h2>";
print "<h3>I'm about to learn PHP!</h3>";

$txt1 = "Learn PHP";
$txt2 = "php.com";
$x = 15;
$y = 20;

echo "<h4>" . $txt1 . "</h4>";
echo "Study PHP at " . $txt2 . "</br>";
echo $x + $y;

print "<h4>" . $txt1 . "</h4>";
print "Study PHP at " . $txt2 . "</br>";
print $x + $y;

echo "</br>";

$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.", $number, $str);

echo "</br>";

$planet1 = "Mercury";
$planet2 = "Jupiter";
echo "The smallest planet is " . $planet1 . " and the biggest planet is " . $planet2;
echo "The smallest planet is {$planet1} and the biggest planet is {$planet2}";
printf("The smallest planet is %s and the biggest planet is %s", $planet1, $planet2);
?>