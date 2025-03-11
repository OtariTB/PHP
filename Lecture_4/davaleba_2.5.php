
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Davaleba 2.5</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="d1">
        <h2>PHP form Validation Example</h2>
        <form action="" method = "post">
            <span style = "color : red;">Required Field *</span>
            <br><br>
            <label for="name">Name:</label>
            <input type="text" name="name" class = "inp"> <span style = "color : red;">*</span>
            <br><br>
            <label for="email">E-Mail :</label>
            <input type="text" name = "email" class="inp"> <span style = "color : red;">*</span>
            <br><br>
            <label for="website">Website :</label>
            <input type="text" name = "website" class="inp"> <span style = "color : red;">*</span>
            <br><br>
            <label for="com">Comment :</label>
            <input type="text" name = "comment" class="inp" style = "height : 100px;"> <span style = "color : red;">*</span>
            <br>
            <label for="radio">Gender :</label>
            <input type="radio" name="gender" value="Male"> Male 
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other <span style="color: red;">*</span>

            <br><br>

            <button class="b1" name = "btn1">Submit</button>
            <h3>Your Input :</h3>
            <?php
            $name = $_POST["name"];
            $email = $_POST["email"];
            $website = $_POST["website"];
            $comment = $_POST["comment"];
            $gender = isset($_POST["gender"]) ? $_POST["gender"] : '';


            if (isset($_POST["btn1"])) {
                $errors = [];
                if (empty($name)) {
                    $errors[] = "Name is required.";
                }
                if (empty($email)) {
                    $errors[] = "Email is required.";
                }
                if (empty($website)) {
                    $errors[] = "Website is required.";
                }
                if (empty($comment)) {
                    $errors[] = "Comment is required.";
                }
                if (empty($gender)) {
                    $errors[] = "Gender is required.";
                }

                if (empty($errors)) {
                    echo "<h4>Name: $name <br>";
                    echo "E-Mail: $email <br>";
                    echo "Website: $website <br>";
                    echo "Comment: $comment <br>";
                    echo "Gender: $gender <br> </h4>";
                } else {
                    foreach ($errors as $error) {
                        echo "<p style='color:red;'>$error</p>";
                    }
                }
            }
            else{
                echo "<p></p>";
            }
            ?>
        </form>
    </div>
</body>
</html>
