<?php
// Exercise - 10
// Write a PHP script that creates the following table (use for loops).

// Solution
// Start the HTML table
echo "<table border=1 style='border-collapse: collapse'>";

// Loop through rows
for ($row = 1; $row <= 10; $row++) {

    echo "<tr>"; // Start a new table row

    // Loop through columns
    for ($col = 1; $col <= 10; $col++) {
        // Calculate the sum of column and row
        $sum = $row * $col;

        // Print the sum in a table cell
        echo "<td>$sum</td>";
    }

    echo "</tr>"; // End the table row
}

// Close the HTML table
echo "</table>";
?>