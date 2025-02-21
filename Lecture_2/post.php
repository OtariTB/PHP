<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="width: 50%; margin: auto; border: solid 1px black; padding: 20px; text-align: center; background-color: rgb(183, 225, 238); border-radius: 16px; font-family: Arial, Helvetica, sans-serif;">

    <h1>GET METHOD</h1>

    <?php
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        echo "Email : ".$_POST['Email']. " ";
        echo "Password : ".$_POST['Password']. " ";
    ?>
    </div>
</body>
</html>