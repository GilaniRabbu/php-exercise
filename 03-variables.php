<?php
$task = "Read";
echo $task; // Read
echo "\n";

// Change Variables Value
$task = "Write";
echo $task; // Write
echo "\n";

// Constants
define("a", 10);
define("A", 15);
define("name", "Mr Hakim");

define("cars", ["BMW", "Audi", "Toyota"]); // Array

echo a . "\n" . A . "\n" . name . "\n" . cars[0] . "\n";

const MyCar = "Volvo";
echo MyCar;
?>