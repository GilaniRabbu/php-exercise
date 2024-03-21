<?php
// PHP Constants
// A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
// A valid constant name starts with a letter or underscore (no $ sign before the constant name).
// Note: Unlike variables, constants are automatically global across the entire script.

// Create a PHP Constant
// To create a constant, use the `define()` function.

// Syntax
// `define(name, value, case-insensitive);`

// PHP Constant Arrays
// From PHP7, you can create an Array constant using the `define()` function.

// Constants are Global
// Constants are automatically global and can be used across the entire script.

// PHP `const` Keyword
// You can also create a constant by using the `const` keyword.

// const vs. define()
// - const are always case-sensitive.
// - define() has has a case-insensitive option.
// - const cannot be created inside another block scope, like inside a function or inside an if statement.
// - define can be created inside another block scope.

define("a", 10);
define("A", 15);
define("name", "Mr Hakim");

define("cars", ["BMW", "Audi", "Toyota"]);

echo a . "\n" . A . "\n" . name . "\n" . cars[0] . "\n";
var_dump(cars);

// Constants are automatically global and can be used across the entire script.
function Car()
{
    echo cars[1]; // Audi
}
Car();

echo "\n";

const MyCar = "Volvo";
echo MyCar;
?>