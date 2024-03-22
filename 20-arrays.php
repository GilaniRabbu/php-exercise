<?php
// PHP Arrays
// An array stores multiple values in one single variable

// What is an Array?
// An array is a special variable that can hold many values under a single name,
// and you can access the values by referring to an index number or name.

// Create Array
// You can create arrays by using the `array()` function.
// You can also use a shorter syntax by using the `[]` brackets.

$fruits = array("Mango", "Orange", "Apple");
// $fruits = ["Mango", "Orange", "Apple"];
var_dump($fruits);

// A comma after the last item is allowed.

// PHP Array Types
// In PHP, there are three types of arrays:
// - Indexed arrays - Arrays with a numeric index
// - Associative arrays - Arrays with named keys
// - Multidimensional arrays - Arrays containing one or more arrays

// Array Items
// Array items can be of any data type.

// The most common are strings and numbers (int, float),
// but array items can also be objects, functions or even arrays.
// You can have different data types in the same array.

// function example:
function myFunction()
{
    echo "This text comes from a function";
}

// create array:
$myArr = array("Fruits", 15, ["apples", "bananas"], myFunction());

// calling the function from the array item:
$myArr[3];

echo "\n";

// Array Functions
// The real strength of PHP arrays are the built-in array functions,
// like the `count()` function for counting array items:
$Fruits = array("Mango", "Orange", "Apple");
echo count($Fruits);

echo "\n";




// PHP Indexed Arrays
// In indexed arrays each item has an index number.
// By default, the first item has index 0, the second item has item 1, etc.

// Access Indexed Arrays
// To access an array item you can refer to the index number.

// Change Value
// To change the value of an array item, use the index number

$fruits = array("Mango", "Orange", "Apple");
echo $fruits[0] . "\n";
$fruits[0] = "Banana";
echo $fruits[0] . "\n";

$Fruits = array("Apple", "Banana", "Cherry");
$Fruits[] = "Orange";
var_dump($Fruits);

// Loop Through an Indexed Array
// To loop through and print all the values of an indexed array, you could use a foreach loop, like this.
$fruits = array("Mango", "Orange", "Apple");
foreach ($fruits as $fruit) {
    echo "$fruit \n";
}

// Array_Push
// If you use the `array_push()` function to add a new item, the new item will get the index 3
$fruits = array("Mango", "Orange", "Apple");
array_push($fruits, "Banana");
var_dump($fruits);

// But if you have an array with random index numbers, like this
$fruits[4] = "Mango";
$fruits[5] = "Orange";
$fruits[12] = "Apple";

// And if you use the `array_push()` function to add a new item, what will be the index number of the new item?
array_push($fruits, "Banana");
var_dump($fruits);




// PHP Associative Arrays
// Associative arrays are arrays that use named keys that you assign to them.

// Access Associative Arrays
// To access an array item you can refer to the key name.

// Change Value
// To change the value of an array item, use the key name.

$car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964); // Arrays
var_dump($car);
echo $car["year"] . "\n"; // Access Associative Arrays

$car["year"] = 2024; // Change Value
echo $car["year"] . "\n";

// Add Multiple Items
$Cars = array("brand" => "Ford", "model" => "Mustang");
$Cars += ["color" => "red", "year" => 1964];

// Loop Through an Associative Array
foreach ($car as $c => $a) {
    echo "$c: $a \n";
}




// Declare Empty Array
// You can declare an empty array first, and add items to it later.
$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
var_dump($cars);

// The same goes for associative arrays, you can declare the array first, and then add items to it.
$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = 1964;
var_dump($myCar);

// Mixing Array Keys
// You can have arrays with both indexed and named keys.
$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";
var_dump($myArr);

// Update Array Items in a Foreach Loop
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$car) {
    $car = "Ford";
}
unset($car);
var_dump($cars);




// Remove Array Item
// To remove an existing item from an array, you can use the `array_splice()` function.
// With the `array_splice()` function you specify the index (where to start) and how many items you want to delete.
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);
var_dump($cars);
// After the deletion, the array gets reindexed automatically, starting at index 0.

// Using the unset Function
// You can also use the `unset()` function to delete existing array items.
// Note: The `unset()` function does not re-arrange the indexes, meaning that after deletion the array will no longer contain the missing indexes.
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]);
var_dump($cars);

// Remove Multiple Array Items
$cars = array("Volvo", "BMW", "Toyota", "Ford");
array_splice($cars, 1, 2);
unset($cars[0], $cars[1]);
var_dump($cars);

// Remove Item From an Associative Array
// To remove items from an associative array, you can use the `unset()` function.
// Specify the key of the item you want to delete.
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);
var_dump($cars);

// Using the array_diff Function
// You can also use the `array_diff()` function to remove items from an associative array.
// This function returns a new array, without the specified items.
// Note: The `array_diff()` function takes values as parameters, and not keys.
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newArray = array_diff($cars, ["Mustang", 1964]);
var_dump($newArray);

// Remove the Last Item
// The `array_pop()` function removes the last item of an array.
array_pop($cars);

// Remove the First Item
// The `array_shift()` function removes the first item of an array.
array_shift($cars);




// PHP Multidimensional Arrays
// Sometimes you want to store values with more than one key.
// For this, we have multidimensional arrays.
// A multidimensional array is an array containing one or more arrays.

// PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.

// The dimension of an array indicates the number of indices you need to select an element.
// - For a two-dimensional array you need two indices to select an element
// - For a three-dimensional array you need three indices to select an element

// A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays).

// We can store the data from the table above in a two-dimensional array, like this:
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

// Now the two-dimensional $cars array contains four arrays, and it has two indices: row and column.
// To get access to the elements of the $cars array we must point to the two indices (row and column):
echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".\n";
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".\n";
echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".\n";
echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".\n";

// We can also put a `for` loop inside another `for` loop to get the elements of the $cars array (we still have to point to the two indices):
// for ($row = 0; $row < 4; $row++) {
//     echo "<p><b>Row number $row</b></p>";
//     echo "<ul>";
//     for ($col = 0; $col < 3; $col++) {
//         echo "<li>" . $cars[$row][$col] . "</li>";
//     }
//     echo "</ul>";
// }




// PHP Sorting Arrays
// The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.

// PHP - Sort Functions For Arrays

// In this chapter, we will go through the following PHP array sort functions:
// - sort() - sort arrays in ascending order.
// - rsort() - sort arrays in descending order.
// - asort() - sort associative arrays in ascending order, according to the value.
// - ksort() - sort associative arrays in ascending order, according to the key.
// - arsort() - sort associative arrays in descending order, according to the value.
// - krsort() - sort associative arrays in descending order, according to the key.

$numbers = array(5, 4, 7, 8, 3, 10);
sort($numbers);

$arrLength = count($numbers);
for ($i = 0; $i < $arrLength; $i++) {
    echo $numbers[$i];
    echo "\n";
}
?>