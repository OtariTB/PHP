<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <table>
        <tr>
            <th>Questions</th>
            <th>Answers</th>
            <th>Max Points</th>
        </tr>
        <?php
        foreach ($questions as $index => $quenstion){
            echo "<tr>";
            echo "<td>".$quenstion['question']."</td>";
            echo "<td><input></input></td>";
            echo "<td>".$quenstion['max_points']."</td>";
            echo "</tr>";
        }
        
        ?>
    </table>

</body>
</html>