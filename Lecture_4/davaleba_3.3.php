<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davaleba 3.3</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="d1">
        <a href="davaleba_3.3.php">reset</a>
        <form action="" method="post">
            <?php
            if (!isset($_POST["btn1"])) {
                $n1 = rand(0,9);
                $n2 = rand(0,9);
                $n3 = rand(0,9);
                $n4 = rand(0,9);
                $n5 = rand(0,9);
                echo "<h2>თქვენი კოდია : $n1 $n2 $n3 $n4 $n5 </h2>";
            } else {
                $n1 = $_POST["n1"];
                $n2 = $_POST["n2"];
                $n3 = $_POST["n3"];
                $n4 = $_POST["n4"];
                $n5 = $_POST["n5"];
            }
            ?>

            <input type="hidden" name="n1" value="<?php echo $n1; ?>">
            <input type="hidden" name="n2" value="<?php echo $n2; ?>">
            <input type="hidden" name="n3" value="<?php echo $n3; ?>">
            <input type="hidden" name="n4" value="<?php echo $n4; ?>">
            <input type="hidden" name="n5" value="<?php echo $n5; ?>">

            <input type="text" class="inpu2" name="num1" maxlength="1">
            <input type="text" class="inpu2" name="num2" maxlength="1">
            <input type="text" class="inpu2" name="num3" maxlength="1">
            <input type="text" class="inpu2" name="num4" maxlength="1">
            <input type="text" class="inpu2" name="num5" maxlength="1">
            <br><br>
            <button class="b1" name="btn1">კოდის შეყვანა</button>

            <?php
            if (isset($_POST["btn1"])){
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $num3 = $_POST["num3"];
                $num4 = $_POST["num4"];
                $num5 = $_POST["num5"];

                if($num1 == $n1 && $num2 == $n2 && $num3 == $n3 && $num4 == $n4 && $num5 == $n5){
                    echo "<br><span style='font-size: 2em;'>თქვენ წარმატებით გაიარეთ რეგისტრაცია</span>";
                } else {
                    echo "<br><span style='font-size: 2em; color: red;'>კოდი არასწორია, სცადეთ დავიდან</span>";
                }
            } else {
                echo "<span></span>";
            }
            ?>
        </form>
    </div>
</body>
</html>
