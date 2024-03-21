<!--
# Exercise - 9
# Write a PHP script using nested for loop that creates a chess board as shown below.
# Use table width="270px" and take 30px as cell height and width.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
</head>

<body>
    <h3>Chess Board using Nested For Loop</h3>

    <table width="270px" border="1" cellpadding="0" cellspacing="0">
        <?php
        // Outer loop for rows
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>"; // Start a new table row

            // Inner loop for columns
            for ($col = 1; $col <= 8; $col++) {

                // Calculate total sum of row and column indices
                $total = $row + $col;

                // Check if total is even or odd to determine cell color
                if ($total % 2 == 0) {
                    echo "<td height=30px width=30px bgcolor=#F6F6F6></td>";
                } else {
                    echo "<td height=30px width=30px bgcolor=#151515></td>";
                }
            }

            echo "</tr>"; // End the table row
        }
        ?>
    </table>
</body>

</html>