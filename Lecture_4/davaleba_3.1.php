<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>davaleba 3.1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class = "d1">
        <h2>10x10 მატრიცა</h2>
        <?php
        function mat() {
            echo "<table>";
            $table = [];
            for ($i = 0; $i < 10; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 10; $j++) {
                    $table[$i][$j] = rand(10, 99);
                    echo "<td>".$table[$i][$j]."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        echo mat();
        ?>
    </div>
</body>
</html>