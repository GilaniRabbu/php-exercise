<!--
# Exercise - 8
# Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cellspacing="0px" to the table tag.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>

<body>
    <table align="left" border="1" cellpadding="3" cellspacing="0">
        <?php
        // Outer loop for creating rows in the table
        for ($i = 1; $i <= 6; $i++) {
            echo "<tr>"; // Start a new table row

            // Inner loop for creating cells in each row
            for ($j = 1; $j <= 5; $j++) {
                // Print the multiplication table in each cell
                echo "<td> $i * $j = " . $i * $j . "</td>";
            }

            echo "</tr>"; // End the table row
        }
        ?>
    </table>
</body>

</html>