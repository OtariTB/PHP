<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <div style="width: 50%; margin: auto; border: solid 2px black; padding: 20px; text-align: center; background-color: rgb(130, 226, 255); border-radius: 16px; font-family: Arial, Helvetica, sans-serif;">

    <h2>Tqveni Sheyvanili Monacemebia :</h2>

    <?php

    echo "<div> <h3> Saxeli : ".$_GET['name']. " </h3> </div> ";
    echo "<div> <h3> Gvari : ".$_GET['surname']. " </h3> </div> ";
    echo "<div> <h3> Pozicia : ".$_GET['position']. " </h3> </div> ";
    echo "<div> <h3> Xelfasi : ".$_GET['salary']. " </h3> </div> ";

    echo "<div> <h3> Xelfasi sashemosavlos shemdgom : ".$_GET['salary'] * $_GET['Tax']. " </h3> </div> ";
    echo "<div> <h3> Password : ".$_GET['Password']. " </h3> </div> ";
    ?>

    </div>
</body>
</html>