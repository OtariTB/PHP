<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davaleba 3.5</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="d1">
        <h3>რიცხვის ნიშნის გამომთვლელი</h3>
        <form action="" method ="post">

            <input type="text" class="inp" name = "n">
            <button class="b1" name="btn1">გამოთვლა</button>


            <?php

            if (isset($_POST['btn1'])) {
                $n = $_POST['n'];

                function ramdenNishna($n){
                    $nishna = 0;
                    for (;$n > 0; $n = (int)($n/10)) {
                        $nishna++;
                    }
                    return $nishna;
                }

                echo " <br> თქვენი რიცხვი ".ramdenNishna($n)."-ნიშნაა";
            }else{
                echo "";
            }
            
            ?>
        </form>
    </div>
</body>
</html>