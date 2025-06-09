<?php
include_once "./front/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./front/style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="?nav=moswavle">Moswavle</a></li>
                <li><a href="?nav=maswavlebeli">MAswavlebeli</a></li>
                <li><a href="?nav=sagani">Sagnebi</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div>
            <?php
            if(isset($_GET['nav'])&& $_GET['nav']=="sagani"){
                include "./front/sagnebi.php";
            }if(isset($_GET['nav'])&& $_GET['nav']=="maswavlebeli"){
                include "./front/maswavleblebi.php";
            }if(isset($_GET['nav'])&& $_GET['nav']=="moswavle"){
                include "./front/moswavleebi.php";
            }
            ?>
        </div>
    </main>
</body>
</html>