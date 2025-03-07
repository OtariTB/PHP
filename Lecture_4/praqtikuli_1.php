<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praqtikuli</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="" method="post">
    <div style="width: 70%; margin: auto; border: solid 1px black; padding: 20px; text-align: center; background-color: rgb(183, 214, 223); border-radius: 16px; font-family: Arial, Helvetica, sans-serif;">
        <input type="text" class="inp" placeholder="Number 1" name = "n1">
        <input type="text" class="inp" placeholder="Number 2" name = "n2">
        <input type="text" class="inp" placeholder="Number 3" name = "n3">

        <button class="b1" name="sum" >Jami</button>
        <button class="b1" name="product" >Namravli</button>

        <h3>
    <?php
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $n3 = $_POST['n3'];

        function isNull($d){
            if(empty($d)) return 0;
            else return $d;
        }
        function isNull1($d){
            if(empty($d)) return 1;
            else return $d;
        }
        function jami($n1,$n2,$n3){
            return $n1 + $n2 + $n3;
        }
        function namravli($n1,$n2,$n3){
            return $n1 * $n2 * $n3;
        }
        if(isset($_POST['sum'])){
            echo jami(isNull($n1),isNull($n2),isNull($n3));
        }
        if(isset($_POST['product'])){
            echo namravli(isNull1($n1),isNull1($n2),isNull1($n3));
        }
    ?>
        </h3>

    </div>
    </form>


</body>
</html>