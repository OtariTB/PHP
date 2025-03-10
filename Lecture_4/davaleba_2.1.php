<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davaleba 2.1</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class = "d1">
        <form action="" method = "post">
            
            <input type="text" class = "inp" name = "num" placeholder = "Enter number">
            <button class="b1" name = "btn1">რიცხვის შყვანა</button>
            <?php
            if (isset($_POST["btn1"])){
                $num = $_POST["num"];
            }            
            if (isset($num)){
                $array = [];
            
                for ($i = 0; $i < 12 ; $i++) {
                    $array[] = rand(10,100);
                }
                echo "<h3> ჩვენი მასივი : ";
                foreach ($array as $index => $value) {
                    echo $value . " ";
                }
                $naklebia = 0;
                $metia = 0;
    
                foreach($array as $value){
                    if ($num > $value) {
                        $naklebia++;
                    }
                    if ($num < $value) {
                        $metia++;
                    }
                }
    
                echo "<br>მასივში $num-ზე ნაკლები: $naklebia ელემენტია";
                echo "<br>მასივში $num-ზე მეტი: $metia ელემენტია";
            }
            else{
                echo "<br> გთხოვთ შეიყვანეთ რიცხვი";
            }
            ?>
        </form>
    </div>
</body>
</html>