<?php
    include_once "cms/inculdes/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>Admin Page</header>
    <main>
        <nav>
            <ul>
                <li><a href="?nav=moswavleebi">მოსწავლეები</a></li>
                <li><a href="?nav=sagani">საგნები</a></li>
                <li><a href="?nav=maswavlebeli">მასწავლებლები</a></li>
            </ul>
        </nav>
        <div>
        <?php
                if(isset($_GET['nav']) && $_GET['nav']=="sagani"){
                    include "cms/inculdes/sagnebi.php";
                }if(isset($_GET['nav']) && $_GET['nav']=="moswavleebi"){
                    include "cms/inculdes/moswavleebi.php";
                }if(isset($_GET['nav']) && $_GET['nav']=="maswavlebeli"){
                    include "cms/inculdes/maswavleblebi.php";
                }
            ?>
        </div>
    </main>
    <footer></footer>
</body>
</html>