<?php
// PHP Casting
// Sometimes you need to change a variable from one data type into another,
// and sometimes you want a variable to have a specific data type.
// This can be done with casting.



// Change Data Type
// Casting in PHP is done with these statements:
// - `(string)` - Converts to data type String
// - `(int)` - Converts to data type Integer
// - `(float)` - Converts to data type Float
// - `(bool)` - Converts to data type Boolean
// - `(array)` - Converts to data type Array
// - `(object)` - Converts to data type Object
// - `(unset)` - Converts to data type NULL



// String
$a = 5;
$b = 5.34;
$c = "Hi There";
$d = true;
$e = NULL;

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

// To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);



// Integer
// $a = 5;
// $b = 5.34;
// $c = "25 kilometers";
// $d = "kilometers 25";
// $e = "kilometers";
// $f = true;
// $g = NULL;

// $a = (int) $a;
// $b = (int) $b;
// $c = (int) $c;
// $d = (int) $d;
// $e = (int) $e;
// $f = (int) $f;
// $g = (int) $g;

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);
// var_dump($f);
// var_dump($g);



// Boolean
// $a = 5;
// $b = 5.34;
// $c = 0;
// $d = -1;
// $e = 0.1;
// $f = "hello";
// $g = "";
// $h = true;
// $i = NULL;

// $a = (bool) $a;
// $b = (bool) $b;
// $c = (bool) $c;
// $d = (bool) $d;
// $e = (bool) $e;
// $f = (bool) $f;
// $g = (bool) $g;
// $h = (bool) $h;
// $i = (bool) $i;

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);
// var_dump($e);
// var_dump($f);
// var_dump($g);
// var_dump($h);
// var_dump($i);
?>