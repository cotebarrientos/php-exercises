<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <title>Chessboard Generator</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="gridsize" min="2" max="15" step="1" required />
        <input type="submit" name="submit" />
    </form>

    <?php

    if (isset($_POST['submit'])) {
        $gridsize = $_POST['gridsize'];

        echo "<table>";

        for ($row = 1; $row <= $gridsize; $row++) {
            echo "<tr>";

            for ($col = 1; $col <= $gridsize; $col++) {
                if (($row + $col) % 2 == 0) {
                    echo "<td class='black'></td>";
                } else {
                    echo "<td></td>";
                }
            }

            echo "</tr>";
        }

        echo "</table>";
    }

    ?>

</body>

</html>