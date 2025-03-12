<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davaleba 3.2</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="d1">
        <h2>შეყვანილი ინფორმაციით ცხრილის გამოტანა</h2>
        <form action="" method = "post">
            <input type="text" class="inp" name = "m" placeholder = "შეიყვანეთ სვეტების რაოდენობა">
            <br><br>
            <input type="text" class="inp" name = "n" placeholder = "შეიყვანეთ სტრიქონების რაოდენობა">
            <br><br>
            <input type="text" class="inp" style = "width : 25%;" name = "a" placeholder = "შეიყვანეთ მინ. მონაცემის მნიშვნელობა">
            <input type="text" class="inp" style = "width : 25%;" name = "b" placeholder = "შეიყვანეთ მაქს. მონაცემის მნიშვნელობა">
            <br><br>
            <button class="b1" name = "btn1">ცხრილის შექმნა</button>
        <?php
            if (isset($_POST["btn1"])){
                $m = $_POST["m"];
                $n = $_POST["n"];
                $a = $_POST["a"];
                $b = $_POST["b"];

                if ($m > 0 && $n > 0 && $a <= $b) {
                    echo "<table>";
                    $table = [];
                    for ($i = 0; $i < $m; $i++) {
                        echo "<tr>";
                        for ($j = 0; $j < $n; $j++) {
                            $table[$i][$j] = rand($a, $b);
                            echo "<td>". $table[$i][$j]. "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                }else{ echo "<br><span style = 'color : red;'>გთხოვთ შეიყვანეთ მონაცემები</span>";}
            }
            else {
                echo " <br>გთხოვთ შეიყვანეთ მონაცემები!";
            }
        ?>
        </form>
    </div>
</body>
</html>