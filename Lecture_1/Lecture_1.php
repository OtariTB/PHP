<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lecture</title>
</head>
<body>
    <div style="width: 50%; margin: auto; border: solid 1px black; padding: 20px; text-align: center; background-color: rgb(183, 225, 238); border-radius: 16px; font-family: Arial, Helvetica, sans-serif;">
        <h1>Lecture 1</h1>

        <?php
            echo "<hr><hr><hr>";
            $full_info = ['name' => "Zura", 'age' => 36, 'city' => "Tbilisi", 'education' => ["GAU","161 skola"]];

            foreach ($full_info as $k => $e){
                echo "<div>$k</div>";
            }
            echo "<hr><hr><hr>";
            echo "Hello PHP";
            $name = "Levani";
            $age = "18";
            echo "<h2>სახელი: $name; ასაკი: $age</h2>";
            $info = ["Otar", 19, 3.8, true, "GAU"];
            echo "<h2>სახელი: $info[0]; უნივერსიტეტი: $info[4]<h2>";
            echo "<hr>";

            $i = 0;
            foreach($info as $e){
                echo "<div>$e</div>";
            }

            echo implode(" <br> ", $info);
        ?>
        <hr> 
            <div>End of Source Code</div>
        <hr>
    </div>
    

</body>
</html>