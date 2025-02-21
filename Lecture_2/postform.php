<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>
<body>
    <style>
        .container{
            margin-left: 200px;
            margin: auto;
        }
        .b1{
            background-color: #4CAF50;
            border: none;
            border-radius: 14px;
            height: 30px;
            width: 180px;
            color: white;
            transition: 200ms;
        }
        .b1:hover{
            background-color: #3e8e41;
            transform: scale(1.1);
            cursor: pointer;
        }
    </style>

    <div class="container">
        <form action="post.php" method = "post">

            <input type="text" name="Email" placeholder = "Enter your Email">
            <br><br>
            <input type="password" name="Password" placeholder = "Enter your Password">
            <br><br>
            <button class = "b1">Sign in</button>

        </form>
    </div>
</body>
</html>