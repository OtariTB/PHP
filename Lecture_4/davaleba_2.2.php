<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davaleba 2.2</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="d1">
        <form action="" method = "post">
            <input type="text" class = "inp" name = "num" placeholder = "Enter number">
            <button class="b1" name = "btn1">რიცხვის შყვანა</button>
            <?php
            if (isset($_POST["btn1"])){
                $num = $_POST["num"];
            }
            if (isset($num)){
                echo "<h3>მატრიცა : </h3>";
                echo "<table>";
                $matrix = [];
    
                for ( $i = 0; $i < 4; $i++ ) {
                    echo "<tr>";
                
                    for ( $j = 0; $j < 4; $j++ ) {
                        $matrix[$i][$j] = rand(10, 100);
                    echo "<td>".$matrix[$i][$j]."</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
    
                echo "<h3>მთავარი დიაგონალის ზემოთ მდებარე ელემენტები:</h3>";
                echo "<table>";
                for ($i = 0; $i < 4; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < 4; $j++) {
                        if ($j > $i) {
                            echo "<td>" . $matrix[$i][$j] . "</td>";
                        } else {
                            echo "<td> x </td>"; 
                        }   
                    }
                    echo "</tr>";
                }
                echo "</table>";

                $sum = 0;
                for ($i = 0; $i < 4; $i++) {
                    for ($j = 0; $j < 4; $j++) {
                        $sum += $matrix[$i][$j];
                        }
                    }
                echo "<h4>მატრიცის ელემენტების ციფრთა ჯამია : $sum</h4>";
                
                $nam = 1;
                for ($i = 0; $i < 4; $i++) {
                    for ($j = 0; $j < 4; $j++) {
                        $nam *= $matrix[$i][$j];
                    }
                }
                echo "<h4>მატრიცის ელემენტების ციფრთა ნამრავლია : $nam</h4>";

                $avg = $sum / 16;

                echo "<h4>მატრიცის ელემენტების არითმეტიკული საჭუალოა : $avg</h4>";

                echo "<h4>მატრიცის თითოეული ელემენტის ჯამი :</h4>";
                echo "<table>";
                for ($i = 0; $i < 4; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < 4; $j++) {
                        echo "<td>" . cifrtaJami($matrix[$i][$j]) . "</td>";
                    }
                    echo "</tr>";
                }        
                echo "</table>"; 
                } else {
                    echo "<h3>გთხოვთ </h3>";
                }
                function cifrtaJami($number) {
                    $sum = 0;
                    while ($number > 0) {
                        $sum += $number % 10;
                        $number = (int)($number / 10);
                    }
                    return $sum;
                }

            ?>
        </form>
    </div>
</body>
</html>
