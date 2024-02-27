<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Sensitivity</title>
</head>

<body>
    <h1>PHP Case Sensitivity</h1>
    <p>In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.</p>
    <p>In the example below, all three `echo` statements below are equal and legal:</p>

    <?php
    echo "Hello, world!<br>";
    echo "Hello, world!<br>";
    echo "Hello, world!";
    ?>

    <p>Note: However; all `variable` names are case-sensitive!</p>

    <?php
    $color = "Blue";

    echo "This is " . $color . " Color";

    // echo "This is " . $Color . " Color";
    # Warning: Undefined variable $Color
    
    // echo "This is " . $COLOR . " Color";
    # Warning: Undefined variable $COLOR
    ?>
</body>

</html>