<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>
<body>
    <style>
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

    <div style="width: 50%; margin: auto; border: solid 2px black; padding: 20px; text-align: center; background-color: rgb(130, 226, 255); border-radius: 16px; font-family: Arial, Helvetica, sans-serif;">
        <h2>Sheiyvanet tqveni informacia</h2>
        <a href="praqtikuli1.php">Gasuftaveba</a>
        <form action="praqtikuli1.php" method="get">
            
            <input type="text" placeholder="input your Name" name="name" required>
            <br><br>
            <input type="text" placeholder="input your Surname" name="surname" required>
            <br><br>
            <input type="text" placeholder="input your Position" name="position" required>
            <br><br>
            <input type="text" placeholder="input your Salary" name = "salary" required>
            <br><br>
            <input type="text" placeholder="input your Tax" name = "Tax" required>
            <br><br>
            <button class="b1">Submit</button>
        </form>
        <hr><hr>
        <table border = "1" style="width: 50%; margin: auto;">
            <tr>
                <th>Saxeli</th>
                <th>Gvari</th>
                <th>Pozicia</th>
                <th>Sashemosavlo</th>
                <th>Migebuli Xelfasi</th>
            </tr>

            <tr>
                <th><?=$_GET['name']?></th>
                <th><?=$_GET['surname']?></th>
                <th><?=$_GET['position']?></th>
                <th><?=$_GET['Tax']?></th>
                <th><?=$_GET['salary'] - $_GET['salary'] * ($_GET['Tax'] / 100)?></th>
            </tr>

        </table>

    </div>
</body>
</html>