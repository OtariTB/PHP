<?php
    include_once "./includes/connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zdzd</title>
    <link rel="stylesheet" href="./front/style.css">
</head>
<body>
    <header>Admin Page</header>
    <main>
        <nav>
            <ul>
                <li><a href="index.php">სტატისტიკები</a></li>
                <li><a href="?nav=role">როლების მართვა</a></li>
                <li><a href="?nav=user">ოთახების მართვა</a></li>
                <li><a href="">მომხმარებლის მართვა</a></li>
                <li><a href="">სასტუმროს მართვა</a></li>
            </ul>
        </nav>
        <div class="d1">
        <?php
                if(isset($_GET['nav']) && $_GET['nav']=="role"){
                    include "includes/roles/roles.php";
                }else{

                }
            ?>

        </div>
    </main>
    <footer></footer>
</body>
</html>