<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praqtikuli 2</title>
</head>
<body>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
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
    .inp{
        width: 80%;
        padding: 10px;
        margin: 10px 0;
        border: none;
        border-radius: 5px;
        font-size: 16px;
    }
    table {
            margin: 0 auto;
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            color: #000;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color:rgb(0, 179, 155);
            color: #fff;
        }
    </style>
    
    <div style ="background-color:rgb(129, 190, 255); padding: 20px; border-radius: 8px; text-align: center; marign : auto; gap : 10px;">
        <h2 style="color: #333; font-size: 24px; margin-bottom"> <a href="praqtikuli_1.2.php">Praqtikuli 2</a></h2>

        <form action="praqtikuli_1.2.php" method="post">
            <input type="text" class = "inp" name = "name" placeholder = "Sheiyvanet tqveni saxeli">
            <br> <br>
            <input type="text" class = "inp" name = "gvari" placeholder = "Sheiyvanet tqveni gvari">
            <br> <br>
            <input type="text" class = "inp" name = "kursi" placeholder = "Sheiyvanet tqveni kursis dasaxeleba">
            <br> <br>
            <input type="text" class = "inp" name = "qula" placeholder = "Sheiyvanet tqveni qula">
            <br> <br>

            <button class="b1">Submit</button>
        </form>

        <table>
            <tr>
                <th>Saxeli</th>
                <th>Gvari</th>
                <th>Kursi</th>
                <th>Qula</th>
                <th>GPA</th>
            </tr>

            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <tr>
                <th><?= $_POST['name']?></th>
                <th><?= $_POST['gvari']?></th>
                <th><?= $_POST['kursi']?></th>
                <th><?= $_POST['qula']?></th>
                <th><?php 
                    if ($_POST['qula'] > 90 && $_POST['qula'] < 101){ 
                        echo "A";
                    } 
                    elseif ($_POST['qula'] > 80 && $_POST['qula'] < 90){
                        echo "B";
                    }
                    elseif ($_POST['qula'] > 70 && $_POST['qula'] < 80){
                        echo "C";
                    }
                    elseif ($_POST['qula'] > 60 && $_POST['qula'] < 70){
                        echo "D";
                    }
                    elseif ($_POST['qula'] > 50 && $_POST['qula'] < 60){
                        echo "E";
                    }
                    else{ 
                        echo "F";
                    }
                ?></th>
            </tr>
            <?php endif; ?>
        </table>

    </div>

</body>
</html>
