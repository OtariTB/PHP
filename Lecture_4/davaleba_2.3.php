<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davaleba 2.3</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="d1">
        <?php
        $matrix = [];

        echo "<table>";
        echo "<h3>6x5 რიცხვითი მატრიცა სადაც ელემენტები ინდექსების ჯამია : </h3>";
        for ($i = 0 ; $i < 6 ; $i++){
            echo "<tr>";
            for ($j = 0 ; $j < 5 ; $j++){
                $matrix[$i][$j] = $i + $j; 
                echo "<td>" . $matrix[$i][$j] . "</td>";
                }
            echo "</tr>";

        }
        echo "</table>";
        ?>
    </div>
</body>
</html>