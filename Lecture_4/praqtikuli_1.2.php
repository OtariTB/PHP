<?php
    $error = "";
    if(isset($_POST['email']) && empty($_POST['email'])){
        $error = "error";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praqtikuli2</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="" method="post">
    <div style = "width: 70%; margin: auto; border: solid 1px black; padding: 20px; text-align: center; background-color: rgb(183, 214, 223); border-radius: 16px; font-family: Arial, Helvetica, sans-serif;">
        <input type="text" class="inp" name="email" placeholder="Enter your Email">-<span class="">*</span>
        <input type="text" class="inp" name="user" placeholder="Enter your User">-*
        <br><br>
        <input type="radio" name="age">18-25
        <input type="radio" name="age">26-30
        <input type="radio" name="age">31-37
        <input type="radio" name="age">38-43
        <br>
        <button class="b1" name = "btn1">Sign Up</button>

        <?php
            
            if(isset($_POST["btn1"])){
                $email = $_POST["email"];
                $user = $_POST["user"];
                $age = $_POST["age"];

                if(empty($email)){
                    echo "<p style = 'color: red; font-size: 32px'>*</p>";
                }
                echo "<h3>$email - $user - $age</h3>";
            }
        ?>
    </div>

    </form>
</body>
</html>