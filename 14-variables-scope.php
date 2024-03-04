<?php
// Global Scope
// $name = "Earth";

// function doSomething()
// {
//     global $name;
//     echo $name; // Earth

//     ####################

//     echo $GLOBALS['name']; // Earth
// }
// doSomething();



// Local Scope
// function doSomething()
// {
//     $name = "Earth"; // Local Scope
//     echo $name; // Earth
// }
// doSomething();
// echo $name; // Undefined variable $name



// Static Scope
function doSomething()
{
  static $i; // Static Scope
  $i = $i ?? 0;

  $i++;
  echo $i;
  echo PHP_EOL;
}
doSomething(); // 1
doSomething(); // 2
doSomething(); // 3
?>