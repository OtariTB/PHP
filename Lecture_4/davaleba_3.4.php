<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davaleba 3.4</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="d1">
        <a href="davaleba_3.4.php">reset</a>
        <form action="" method="post">
            <?php
            $n1 = rand(0,99);
            $n2 = rand(0,99);

            $nishani = ["+","-"];
            $randNishani = $nishani[array_rand($nishani)];

            $code = "$n1 $randNishani $n2";
            echo "<h3> $code </h3>";
            
            ?>
            <input type="hidden" name="n1" value="<?php echo $n1; ?>">
            <input type="hidden" name="n2" value="<?php echo $n2; ?>">
            <input type="text" class="inp" name="ans" placeholder="გთხოვთ შეიყვანეთ ამონახსნი">

            <button class="b1" name="btn1">პასუხი</button>
            <?php
            if (isset($_POST['btn1'])) {
                $ans = (int)$_POST['ans']; 
                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                if ($n1 + $n2 == $ans || $n1 - $n2 == $ans) {

                    echo "<p style='color: green; font-size: 2em;'>თქვენ სრულყოფილად გაიარეთ რეგისტრაცია !</p>";
                } else {
                    echo "<p style='color: red; font-size: 2em;'>პასუხი არასწორია ! სცადეთ თავიდან </p>";
                }
            } else {
                echo " ";
            }
            ?>
        </form>
    </div>
</body>
</html>
