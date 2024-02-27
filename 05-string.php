<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String</title>
</head>

<body>
    <h1>PHP String</h1>
    <p>A string is a sequence of characters, like "Hello world!".</p>
    <p>Strings in PHP are surrounded by either double quotation marks, or single quotation marks.</p>

    <?php
    $name = "Tr Gilani";

    # Length
    echo strlen($name) . "<br>";

    # Word Count
    echo str_word_count($name) . "<br>";

    # Upper Case
    echo strtoupper($name) . "<br>";

    # Lower Case
    echo strtolower($name) . "<br>";

    # Reverse a String
    echo strrev($name) . "<br>";

    # Replace String
    echo str_replace("Tr", "MD", $name) . "<br>";

    # Convert String into Array
    $place = "Eastern United Front";
    $con = explode(" ", $place);
    print_r($con);

    # Slicing Strings
    $txt = "Hello World";
    echo substr($txt, 6, 5) . "<br>"; # World
    echo substr($txt, -5, 3) . "<br>"; # Wor
    
    # Escape Character
    $newTxt = "We are the so-called \"Vikings\" from the north.";
    echo $newTxt;
    ?>
</body>

</html>